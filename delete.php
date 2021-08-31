<?php
// Include config file
    require_once "library/auth.php";

    if(isset($_COOKIE['username']) and isset($_COOKIE['token'])) 
    {
      $username = $_COOKIE['username'];
      $token = $_COOKIE['token'];

      if(!verify_session($username, $token)){
        header("Location: index.php");
    }
} 
else {
  header("Location: index.php");
}

$sem=preg_split("/[\d]/", $_GET['name'], 2);

if(isset($_POST["id"]) && !empty($_POST["id"])){
    
    
        $db_conn=get_db_connection();
        $sql = "DELETE FROM ".$_GET['batch']." WHERE rollno='".$_POST['id']."'";
        $sql1="DELETE FROM ".$_GET['name']." WHERE rollno='".$_POST['id']."'";

       if(isset($_POST['submit3']))
        {
            if($result = mysqli_multi_query($db_conn, $sql))
       {
        if($result = mysqli_multi_query($db_conn, $sql1))
        {
            header("location: semester.php?name=".$_GET['name']."&batch=".$_GET['batch']);
            exit();
        }else{
            $flag=2;
        }}
        else{
            $flag=2;
            
        }}
        else if (isset($_POST['submit1'])) {
            if($result = mysqli_multi_query($db_conn, $sql1))
        {
            header("location: semester.php?name=".$_GET['name']."&batch=".$_GET['batch']);
            exit();
        }else{
            $flag=2;

        }}
        else if(isset($_POST['submit2']))
        {
            if($result = mysqli_multi_query($db_conn, $sql))
        {
            header("location: semester.php?name=".$_GET['name']."&batch=".$_GET['batch']);
            exit();
        }else{
            $flag=2;
            }
        }
        mysqli_close($db_conn);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DELETE | MSECs</title>
    <link rel="icon" href="https://californiaena.org/wp-content/uploads/2017/12/graduation-cap.png" type="image/gif" sizes="16x16">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }

        body{
         color: #000033;
         font-family: sans-serif, Arial, Helvetica ;
        }
        ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: #CCFFFF;
              position: -webkit-sticky; /* Safari */

              top: 0;
            }

            li {
              float: left;
            }

            li a {
              display: block;
              color: black;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
              font-weight: bolder;
              border: solid;
              border-color: #CCFFFF;
            }

            li a:hover {
              background-color: #000033;
              text-decoration: none;
              color: white;
              border: solid;
              border-color:white; 
            }

            .active {
              background-color: white;
              color: #000015;
            }

            

            

            h4{
                font-weight: bolder;
            }

            .w3-bar-block .w3-bar-item {
                  padding: 16px;
                  font-weight: bold;
                   background-color:#25274d;
            color: #aaabb8;
              }
            
            


            .w3-bar-item{
                padding: 16px;
                letter-spacing: 1px;
                font-weight: bold;
                 background-color:#25274d;
            color: #aaabb8;
            }
            .headd{
            color: #aaabb8;
            text-shadow: 2px 2px 1px #000000!important;
        }
            .w3-bar-item:hover {
                padding: 16px;
                letter-spacing: 1px;
                font-weight: bold;
               color:  #aaabb8!important;
            background-color:#29648a!important;
            }

            
             .bluecolor{
            background-color:#25274d!important;
                }
        .w3-leftbar{
            border-left:#1E6091!important;
                }
            .topnav {
              overflow: hidden;
              background-color:#25274d;
            }

            .topnav a {
              float: left;
              display: block;
              color: #aaabb8;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
              font-size: 17px;
              border-left: 7px solid transparent;
            }

            .topnav a.active {
              border-left: 7px solid #2e9cca;
             color: #2e9cca;
          background-color: rgba(0, 0, 0, 0.3);
            }

             
    </style>
</head>
<body>
    <nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card  topnav" style="z-index:3;width:250px;" id="mySidebar">
        <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="home.php"><p style="width:80%; font-size: 150%; text-align: center; text-shadow: 1px 1px 3px #000000">MSEC CSE</p> </a>
        <a class="w3-bar-item w3-leftbar w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>

        
        
        <?php
        if($sem[1]=='sem1')
            echo'<a class="w3-bar-item w3-button" href="semester.php?name='.$_GET['name'].'&batch='.$_GET['batch'].'"><i class=\'fas fa-school\'></i> &nbsp;SEMESTER 1</a>';
        elseif($sem[1]=='sem2')
            echo'<a class="w3-bar-item w3-button" href="semester.php?name='.$_GET['name'].'&batch='.$_GET['batch'].'"><i class=\'fas fa-school\'></i> &nbsp;SEMESTER 2</a>';
        elseif($sem[1]=='sem3')
            echo'<a class="w3-bar-item w3-button" href="semester.php?name='.$_GET['name'].'&batch='.$_GET['batch'].'"><i class=\'fas fa-school\'></i> &nbsp;SEMESTER 3</a>';
        elseif($sem[1]=='sem4')
            echo'<a class="w3-bar-item w3-button" href="semester.php?name='.$_GET['name'].'&batch='.$_GET['batch'].'"><i class=\'fas fa-school\'></i> &nbsp;SEMESTER 4</a>';
        elseif($sem[1]=='sem5')
            echo'<a class="w3-bar-item w3-button" href="semester.php?name='.$_GET['name'].'&batch='.$_GET['batch'].'"><i class=\'fas fa-school\'></i> &nbsp;SEMESTER 5</a>';
        elseif($sem[1]=='sem6')
            echo'<a class="w3-bar-item w3-button" href="semester.php?name='.$_GET['name'].'&batch='.$_GET['batch'].'"><i class=\'fas fa-school\'></i> &nbsp;SEMESTER 6</a>';
        elseif($sem[1]=='sem7')
            echo'<a class="w3-bar-item w3-button" href="semester.php?name='.$_GET['name'].'&batch='.$_GET['batch'].'"><i class=\'fas fa-school\'></i> &nbsp;SEMESTER 7</a>';
        elseif($sem[1]=='sem8')
            echo'<a class="w3-bar-item w3-button" href="semester.php?name='.$_GET['name'].'&batch='.$_GET['batch'].'"><i class=\'fas fa-school\'></i> &nbsp;SEMESTER 8</a>';
        ?>
        
        <a class="w3-bar-item w3-button active" href="#"><i class='fas fa-edit'></i>&nbsp;DELETE</a>
    </nav>

     <div class="w3-overlay w3-hide-large w3-animate-opacity " onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

    <div class="w3-main" style="margin-left:250px;">

        <div id="myTop" class="w3-container w3-top w3-theme w3-large bluecolor">
            <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge " onclick="w3_open()"></i>
                <?php
                if($sem[1]=='sem1')
                {
                    echo'<span id="myIntro" class="w3-hide headd" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 1</span>';
                }
                else if($sem[1]=='sem2')
                {
                    echo'<span id="myIntro" class="w3-hide headd" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;margin-top:20px;">Semester 2</span>';
                }
                else if($sem[1]=='sem3')
                {
                    echo'<span id="myIntro" class="w3-hide headd" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 3</span>';
                }
                else if($sem[1]=='sem4')
                {
                    echo'<span id="myIntro" class="w3-hide headd" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 4</span>';
                }
                else if($sem[1]=='sem5')
                {
                    echo'<span id="myIntro" class="w3-hide headd" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 5</span>';
                }
                else if($sem[1]=='sem6')
                {
                    echo'<span id="myIntro" class="w3-hide headd" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 6</span>';
                }
                else if($sem[1]=='sem7')
                {
                    echo'<span id="myIntro" class="w3-hide headd" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 7</span>';
                }
                else if($sem[1]=='sem8')
                {
                    echo'<span id="myIntro" class="w3-hide headd" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 8</span>';
                }
            ?></p>
        </div>

        <header class="w3-container w3-theme bluecolor" style="padding:64px 32px; text-align:center;">
         <?php 
         if($_GET['batch']=='batch1')
         {
            echo' <h1 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">BATCH 1</h1>';
        }
        else if($_GET['batch']=='batch2')
        {
            echo' <h1 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">BATCH 2</h1>';
        }
        else if($_GET['batch']=='batch3')
        {
            echo' <h1 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">BATCH 3</h1>';
        }
        else if($_GET['batch']=='batch4')
        {
            echo' <h1 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">BATCH 4</h1>';
        }

        if($sem[1]=="sem1")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 1</H2>';
            $semester="SEMESTER 1";
        }
        else if($sem[1]=="sem2")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 2</H2>';
            $semester="SEMESTER 2";
        }
        else if($sem[1]=="sem3")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 3</H2>';
            $semester="SEMESTER 3";
        }
        else if($sem[1]=="sem4")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 4</H2>';
            $semester="SEMESTER 4";
        }
        else if($sem[1]=="sem5")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 5</H2>';
            $semester="SEMESTER 5";
        }
        else if($sem[1]=="sem6")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 6</H2>';
            $semester="SEMESTER 6";
        }
        else if($sem[1]=="sem7")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 7</H2>';
            $semester="SEMESTER 7";
        }
        else if($sem[1]=="sem8")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 8</H2>';
            $semester="SEMESTER 8";
        }
        ?>
    </header>
                  <?php
       if(isset($_POST['submit1'])||isset($_POST['submit2'])||isset($_POST['submit3'])){
      if($flag==2){
      ?>
        <div class="alert alert-danger" role="alert">
        <strong>Sorry!</strong> Couldn't DELETE <?php echo$_POST['id']; ?>'s details. 
        </div>
      <?php
      }}
      ?>
      <div class="w3-container" style="padding:32px">
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="alert alert-danger">
                               <h2 class="mt-5 mb-3" style="text-align: center;">DELETE ACADEMIC DETAILS ❓</h2>
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p style="text-align: center;">ARE YOU SURE ,YOU WANT TO DELETE THIS STUDENT'S <?php echo$semester;?> RECORD ALONE?</p>
                            <p>
                                <input style="margin-left: 39%;" type="submit" name="submit1" value="Yes" class="btn btn-danger">
                                <a href="home.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="alert alert-danger">
                               <h2 class="mt-5 mb-3" style="text-align: center;">DELETE PERSONAL DETAILS ❓</h2>
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p style="text-align: center;">ARE YOU SURE ,YOU WANT TO DELETE THIS STUDENT PERSONAL DETAILS ALONE ?</p>
                            <p>
                                <input style="margin-left: 39%;" type="submit" name="submit2" value="Yes" class="btn btn-danger">
                                <a href="home.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="alert alert-danger">
                               <h2 class="mt-5 mb-3" style="text-align: center;">DELETE BOTH ACADEMIC AND PERSONAL DETAILS ❓</h2>
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p style="text-align: center;">ARE YOU SURE,YOU WANT TO DELETE THIS STUDENTS <?php echo$semester;?> DETAILS and PERSONAL DETAILS ?</p>
                            <p>
                                <input style="margin-left: 39%;" type="submit" name="submit3" value="Yes" class="btn btn-danger">
                                <a href="home.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
</div>

                <footer  style=" padding:32px; background-color:#000015; text-align: center; color:#FF6600; text-decoration: none;font-size:180%;">
                 <p style="color:#FF6600;">&copy; <a href="http://www.msec.edu.in/" title="W3.CSS" target="_blank" class="w3-hover-text-green" style="margint-left: 15%;color:#FF6600; ">MSEC</a></p>
             </footer>
</body>
</html>