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

$flag=0;
$sem=preg_split("/[\d]/", $_GET['name'], 2);
$subjects=array(array("Communicative English","Engineering Mathematics-I","Engineering Physics","Engineering Chemistry","Problem Solving and Python Programming","Engineering Graphics","PSPP Lab","P&C Lab"),array("Technical English","Engineering Mathematics-II","Physics for Information Science","Basic Electrical,Electronics and Measurement Engineering","Environmental Science and Engineering","Programming in C","EPs Lab","CP Lab"),array("Discrete Mathematics","Digital Principles and Design","Data Structures","Object Oriented Programming","Communication Engineering","DS Lab","OOP Lab","DS Lab","Interpersonal Skills/Listening & Speaking"),array("Probability and Queuing Theory","Computer Architecture","Database Management Systems","Design and Analysis of Algorithms","Operating Systems","Software Engineering","DBMS Lab","OS Lab","Advance Reading and Writing"),array("Algebra and Number Theory","Computer Networks","Microprocessors and Microcontrollers","Theory of Computation","Object Oriented Analysis and Design","Open Elective I","MPMC Lab","OOAD Lab","CN Lab"),array("Internet Programming","Artificial Intelligence","Mobile Computing","Complier Design","Distributed Systems","Professional Elective I","IP lab","MAD Lab","Mini Project"),array("Principles of Management","Cryptography and Network Security","Cloud Computing","Open Elective II","Professional Elective II","Professional Elective III","CC Lab","Security Lab"),array("Professional Elective IV","Professional Elective V","Project Work"));

//Define variables and initialize with empty values
$name = $reg = "";
$name_err = $reg_err = "";

// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

   // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }

    // Validate reg reg
    // $inpur_reg = trim($_POST["id"]);
    // if(empty($inpur_reg)){
    //     $reg_err = "Please enter an reg.";     
    // } elseif(!filter_var($input_reg, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[0-9\s]+$/")))){
    //     $name_err = "Please enter a valid register number.";
    // }else{
    //     $reg = $inpur_reg;
    // }



    // Check input errors before inserting in database
    // if(empty($name_err) && empty($reg_err)){ 
        // Prepare an update statement
        $db_conn=get_db_connection();
       

        

    if(isset($_POST['submit1']))
    {
         $sql = "INSERT INTO ".$_GET['batch']." (rollno,name,fathername,mothername,dob,schoolname,sslc,hsc,address,mail) VALUES ('".$_POST['id']."','".$_POST['name']."','".$_POST['fathername']."','".$_POST['mothername']."','".$_POST['dob']."','".$_POST['schoolname']."','".$_POST['sslc']."','".$_POST['hsc']."','".$_POST['address']."','".$_POST['mail']."')";
        if($result = mysqli_multi_query($db_conn, $sql))
       {
        $flag=1;
        } 
        else{
        $flag=2;
       }
         mysqli_close($db_conn);
        
    } 
    if(isset($_POST['submit2']))
    {
        $sql1="INSERT INTO ".$_GET['name']." (name,rollno,attendance,office_name,domain,duration_intern,start_intern,end_intern,ecube_topic,company_name,visit_date,summary_iv,comm_eng,math,eng_phy,eng_che,pspp,eng_gra,pspplab,pclab,gpa,cgpa) VALUES ('".$_POST['name']."','".$_POST['id']."','".$_POST['attendance']."','".$_POST['office_name']."','".$_POST['domain']."','".$_POST['duration_intern']."','".$_POST['start_intern']."','".$_POST['end_intern']."','".$_POST['ecube_topic']."','".$_POST['company_name']."','".$_POST['visit_date']."','".$_POST['summary_iv']."','".$_POST['comm_eng']."','".$_POST['math']."','".$_POST['eng_phy']."','".$_POST['eng_che']."','".$_POST['pspp']."','".$_POST['eng_gra']."','".$_POST['pspplab']."','".$_POST['pclab']."','".$_POST['gpa']."','".$_POST['cgpa']."')";
        if($result = mysqli_multi_query($db_conn, $sql1))
       {
        $flag=1;
        } 
        else{
        $flag=2;
            }
             mysqli_close($db_conn);
        
    }      

    // Close connection
   

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADD | MSEC</title>
    <link rel="icon" href="https://californiaena.org/wp-content/uploads/2017/12/graduation-cap.png" type="image/gif" sizes="16x16">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <script>
    $(document).ready(function(){
      $("#academic1").click(function(){
        $("#personal").hide();
        $("#academic").show();
        $("#academic1").addClass('active');
        $("#personal1").removeClass('active');

      });
      $("#personal1").click(function(){
        $("#personal").show();
        $("#academic").hide();
        $("#personal1").addClass('active');
        $("#academic1").removeClass('active');
      });
    });
    </script>
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

            section .details{
                background-color: rgba(204, 255, 255, 0.3);
                width: 40%;
                margin-left:9%;
                margin-bottom:6%;
                height: 70%;
                box-shadow: 1px 1px 1px 1px #888888;
                border-radius: 1%;
                display: inline-block;
                color: #000033;
            }

            section .mark{
                background-color: rgba(204, 255, 255, 0.3);
                width: 84%;
                margin:9%;
                height: 70%;
               margin-top: 25px!important;
                margin-bottom: 25px!important;
                color: #000033;
                box-shadow: 1px 1px 1px 1px #888888;
                border-radius: 1%;
            }

            section .intern{
                background-color: rgba(204, 255, 255, 0.3);
                width: 84%;
                margin:9%;
                height: 70%;
                color: #000033;
                margin-top: 25px!important;
                margin-bottom: 25px!important;
                box-shadow: 1px 1px 1px 1px #888888;
                border-radius: 1%;
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
            
            .details input{
               width: 70% !important;
            }
            .mark input{
               width: 30% !important;
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

            #customers {
          font-family: sans-serif, Arial, Helvetica ;
          border-collapse: collapse;
          width: 100%; 
        }
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        #customers tr:hover {background-color: #ddd;}
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #25274d;
          color: #aaabb8;
        }
            .bluecolor {
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

             input{
                border: 1px solid #ccc;
                border-radius: 2px;
                padding: 4px 6px;
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
        
        <a class="w3-bar-item w3-button sub" id="personal1" href="#" ><i class='fas fa-user-graduate'></i>&nbsp;Personal-ADD </a>
        <a class="w3-bar-item w3-button active sub" id="academic1" href="#" ><i class='fas fa-book-reader'></i>&nbsp;Academic-ADD</a>
        
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
        }
        else if($sem[1]=="sem2")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 2</H2>';
        }
        else if($sem[1]=="sem3")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 3</H2>';
        }
        else if($sem[1]=="sem4")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 4</H2>';
        }
        else if($sem[1]=="sem5")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 5</H2>';
        }
        else if($sem[1]=="sem6")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 6</H2>';
        }
        else if($sem[1]=="sem7")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 7</H2>';
        }
        else if($sem[1]=="sem8")
        {
            echo'<H2 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 8</H2>';
        }
        ?>

    </header>
    <?php
       if(isset($_POST['submit1'])||isset($_POST['submit2'])){
      if($flag==1){
      ?>
        <div class="alert alert-success" role="alert">
        <strong>Success!</strong> Added <?php echo$_POST['name']; ?>'s details. 
        </div>
      <?php
      }
      if($flag==2){
      ?>
        <div class="alert alert-danger" role="alert">
        <strong>Sorry!</strong> Couldn't Add <?php echo$_POST['name']; ?>'s details. 
        </div>
      <?php
      }
      }
      ?>

    <SECTION>
         <div id="personal" style="display: none;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <center><h2 class="mt-5" style=" font-weight: bolder;">ADD DETAILS &nbsp;<i class='fas fa-edit'></i></h2></center><center>


                        <p style="text-align: center; color: red; font-weight: bold;">* REQUIRED FIELD <br> ENTER AND HIT SAVE</p></center>
                        <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                                            

                            <section class="details" ><div class="form-group">
                                <center>
                                    <div><br>

                                       <h4 style="text-align:center;">STUDENT DETAILS</h4>
                                       <label >Name *</label>
                                       <input type="text" name="name" <?php echo'class="form-control';echo (!empty($name_err)) ? 'is-invalid' : ''; echo'" '; ?>>
                                       <span class="invalid-feedback"><?php echo $name_err;?></span>
                                   </div><br>
                                   <div class="form-group">
                                    <label>Register Number *</label>
                                    <input type="number"   name="id" <?php echo'class="form-control'; echo (!empty($reg_err)) ? 'is-invalid' : ''; echo'" '; ?>>
                                    <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>SSLC % *</label>
                                    <input type="text"  name="sslc" class="form-control"  >
                                    <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>HSC % *</label>
                                    <input type="text" style="margin-bottom: 5%;"  name="hsc" class="form-control"  >
                                    <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Mail ID *</label>
                                    <input type="emailid" style="margin-bottom: 5%;"  name="mail" class="form-control"  >
                                    <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                </div>
                            </div></center> 
                        </section>
                        
                        <section class="details" style="margin-left:3% !important;" ><div class="form-group">
                            <center>
                                <div><br>

                                   <h4 style="text-align:center;">PERSONAL DETAILS</h4>
                                   <label >Father Name *</label>
                                   <input type="text" name="fathername" class="form-control" >
                                   <span class="invalid-feedback"><?php echo $name_err;?></span>
                               </div><br>
                               <div class="form-group">
                                <label>Mother Name *</label>
                                <input type="text"   name="mothername" class="form-control">
                                <span class="invalid-feedback"><?php echo $reg_err;?></span>
                            </div>
                            <div class="form-group">
                                <label>HSC School Name *</label>
                                <input type="text"  name="schoolname" class="form-control" >
                                <span class="invalid-feedback"><?php echo $reg_err;?></span>
                            </div>
                            <div class="form-group">
                                <label>Date Of Birth *</label>
                                <input type="text" style="margin-bottom: 5%;"  name="dob" class="form-control" >
                                <span class="invalid-feedback"><?php echo $reg_err;?></span>
                            </div>
                            <div class="form-group">
                                <label>Address *</label>
                                <input type="text" style="margin-bottom: 5%;"  name="address" class="form-control" >
                                <span class="invalid-feedback"><?php echo $reg_err;?></span>
                            </div>
                        </div></center> 
                    </section>

                                
                                <center>
                                    <input style=" margin-left: 6%;  color: #000033; width: 10% !important; font-weight: bolder;  background-color: #CCFFFF; !important; border-color: #000033; !important; " type="submit" name="submit1" class="btn btn-primary"  value="SAVE">
                                    <a href="home.php" style="   color: #000033; font-weight: bolder; background-color: #CCFFFF; border-color:#000033; width: 10%" class="btn btn-secondary ml-2">CANCEL</a><br><br></center>
                                </form>
                            </div>
                        </div>        
                    </div>
                </div>

        <div id="academic">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <center><h2 class="mt-5" style=" font-weight: bolder;">ADD DETAILS &nbsp;<i class='fas fa-edit'></i></h2></center><center>

                        <p style="text-align: center; color: red; font-weight: bold;">* REQUIRED FIELD <br> ENTER AND HIT SAVE</p></center>
                        <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">

                    <section class="mark"><br>
                        <center><div>
                                       <h4 style="text-align:center;">STUDENT DETAILS</h4>
                                       <label >Name *</label>
                                       <input type="text" name="name" <?php echo'class="form-control';echo (!empty($name_err)) ? 'is-invalid' : ''; echo'" '; ?>>
                                       <span class="invalid-feedback"><?php echo $name_err;?></span>
                                   </div><br>
                                   <div class="form-group">
                                    <label>Register Number *</label>
                                    <input type="number"   name="id" <?php echo'class="form-control'; echo (!empty($reg_err)) ? 'is-invalid' : ''; echo'" '; ?>>
                                    <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                </div></center><br>
                                <h4 style="text-align:center;">
                            <?php   if($sem[1]=='sem1') echo'SEMESTER 1 ACADEMIC DETAILS';
                                    else if($sem[1]=='sem2') echo'SEMESTER 2 ACADEMIC DETAILS';
                                    else if($sem[1]=='sem3') echo'SEMESTER 3 ACADEMIC DETAILS';
                                    else if($sem[1]=='sem4') echo'SEMESTER 4 ACADEMIC DETAILS';
                                    else if($sem[1]=='sem5') echo'SEMESTER 5 ACADEMIC DETAILS';
                                    else if($sem[1]=='sem6') echo'SEMESTER 6 ACADEMIC DETAILS';
                                    else if($sem[1]=='sem7') echo'SEMESTER 7 ACADEMIC DETAILS';
                                    else if($sem[1]=='sem8') echo'SEMESTER 8 ACADEMIC DETAILS';?></h4><br>

                       <?php echo'<div class="col-md col-lg">';
                       if($sem[1]=='sem1')
                       {
                        echo'
                            <div class="row g-3">
                            <div class="col-sm-3"><label style="margin-left: 5%;">'.$subjects[0][0].' * :</label></div>
                            <div class="col-sm-3"><input type="text" style="margin-bottom: 5%; "  name="comm_eng" ></div>
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        ';
                        echo'<div class="col-sm-3">
                            <label style="margin-left: 5%;">'.$subjects[0][1].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="math" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div></div>';
                        echo'<div class="row g-3"><div class="col-sm-3">
                            <label style="margin-left: 5%;">'.$subjects[0][2].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="eng_phy" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div>';
                        echo'<div class="col-sm-3">
                            <label style="margin-left: 5%;">'.$subjects[0][3].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="eng_che" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div></div>';
                        echo'<div class="row g-3"><div class="col-sm-3">
                            <label style="margin-left: 5%;">'.$subjects[0][4].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="pspp" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div>';
                        echo'<div class="col-sm-3">
                            <label style="margin-left: 5%;">'.$subjects[0][5].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="eng_gra" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div></div>';
                        echo'<div class="row g-3"><div class="col-sm-3">
                            <label style="margin-left: 5%;">'.$subjects[0][6].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="pspplab" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div>';
                        echo'<div class="col-sm-3">
                            <label style="margin-left: 5%;">'.$subjects[0][7].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="pclab" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div></div>';

                       }
                       else if($sem[1]=='sem2')
                       {
                        echo'<div class="row g-3"><div class="col-sm-3">
                            <label style="margin-left: 40%;">'.$subjects[1][0].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="reg" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div>';
                        echo'<div class="col-sm-3">
                            <label style="margin-left: 40%;">'.$subjects[1][1].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="reg" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div></div>';
                        echo'<div class="row g-3"><div class="col-sm-3">
                            <label style="margin-left: 40%;">'.$subjects[1][2].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="reg" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div>';
                        echo'<div class="col-sm-3">
                            <label style="margin-left: 40%;">'.$subjects[1][3].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="reg" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div></div>';
                        echo'<div class="row g-3"><div class="col-sm-3">
                            <label style="margin-left: 40%;">'.$subjects[1][4].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="reg" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div>';
                        echo'<div class="col-sm-3">
                            <label style="margin-left: 40%;">'.$subjects[1][5].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="reg" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div></div>';
                        echo'<div class="row g-3"><div class="col-sm-3">
                            <label style="margin-left: 40%;">'.$subjects[1][6].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="reg" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div>';
                        echo'<div class="col-sm-3">
                            <label style="margin-left: 40%;">'.$subjects[1][7].' * :</label></div><div class="col-sm-3">
                            <input type="text" style="margin-bottom: 5%; "  name="reg" >
                            <span class="invalid-feedback"><?php echo $reg_err;?></span>
                        </div></div>';

                       } ?><br>
                       
                            <div class="row g-3"><div class="col-sm-3">
                                <label style="margin-left: 5%; ">GPA * :</label></div><div class="col-sm-3">
                                <input type="text" style="margin-bottom: 5%; "  name="gpa">
                                <span class="invalid-feedback"><?php echo $reg_err;?></span>
                            </div>

                            <div class="col-sm-3">
                                <label style="margin-left: 5%; ">CGPA * :</label></div><div class="col-sm-3">
                                <input type="text" style="margin-bottom: 5%; "  name="cgpa" >
                                <span class="invalid-feedback"><?php echo $reg_err;?></span>
                            </div><br></div><div><br>

                                <center><div>
                                       <h4 style="text-align:center;">ATTENDANCE</h4><br>
                                       <div class="form-group" ><label >No.of Days Present *</label>
                                       <input type="text" name="attendance" <?php echo'class="form-control';echo (!empty($name_err)) ? 'is-invalid' : ''; echo'" '; ?>>
                                       <span class="invalid-feedback"><?php echo $name_err;?></span>
                                   </div></div><br><br></center>
                        </section>


                        <section class="intern"><br>
                            <h4 style="text-align:center;">INTERN DETAILS</h4><br>
                            <center>


                                <div class="form-group" style="display: inline-block;">
                                    <label style="margin-left: 4%;">Office Name *</label>
                                    <input type="text" style="margin-bottom: 5%; "  name="office_name" >
                                    <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                </div>

                                <div class="form-group" style="display: inline-block;">
                                    <label style="margin-left: 4%;">Domain *</label>
                                    <input type="text" style="margin-bottom: 5%; "  name="domain" >
                                    <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                </div><br>
                                <div class="form-group" style="display: inline-block;">
                                    <label style="margin-left: 4%;">Duration * :</label>
                                    <input type="text" style="margin-bottom: 5%; "  name="duration_intern" >
                                    <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                </div>

                                <div class="form-group" style="display: inline-block;">
                                    <label style="margin-left: 4%;">Start Date* :</label>
                                    <input type="text" style="margin-bottom: 5%; "  name="start_intern" >
                                    <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                </div>

                                <div class="form-group" style="display: inline-block;">
                                    <label style="margin-left: 4%;">End Date * :</label>
                                    <input type="text" style="margin-bottom: 5%; "  name="end_intern" >
                                    <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                </div><br>
                            </center><br>

                            <h4 style="text-align:center;">INDUSTRIAL VISIT</h4><br>
                            <center>
                                <div class="form-group" style="display: inline-block;">
                                    <label style="margin-left: 4%;">Company Name *</label>
                                    <input type="text" style="margin-bottom: 5%; "  name="company_name" >
                                    <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                </div>

                                <div class="form-group" style="display: inline-block;">
                                    <label style="margin-left: 4%;">Visit Date *</label>
                                    <input type="text" style="margin-bottom: 5%; "  name="visit_date" >
                                    <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                </div>

                                <div class="form-group" >
                                    <label style="margin-left: 4%;">Summary * :</label>
                                    <input type="text" style=" width:70%;" name="summary_iv" >
                                    <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                </div><br></center>

                                <br>

                                <h4 style="text-align:center;">ECUBE</h4><br>
                                <center>
                                    <div class="form-group" style="display: inline-block;">
                                        <label >Topic *:</label>
                                        <input type="text"   name="ecube_topic" >
                                        <span class="invalid-feedback"><?php echo $reg_err;?></span>
                                    </div>

                                    </center>

                                </section>

                                
                                <center>
                                    <input style=" margin-left: 6%;  color: #000033; width: 10% !important; font-weight: bolder;  background-color: #CCFFFF; !important; border-color: #000033; !important; " type="submit" name="submit2"class="btn btn-primary"  value="SAVE">
                                    <a href="home.php" style="   color: #000033; font-weight: bolder; background-color: #CCFFFF; border-color:#000033; width: 10%" class="btn btn-secondary ml-2">CANCEL</a><br><br></center>
                                </form>
                            </div>
                        </div>        
                    </div>
                </div>

            </SECTION>

                <footer  style=" padding:32px; background-color:#000015; text-align: center; color:#FF6600; text-decoration: none;font-size:180%;">
                 <p style="color:#FF6600;">&copy; <a href="http://www.msec.edu.in/" title="W3.CSS" target="_blank" class="w3-hover-text-green" style="margint-left: 15%;color:#FF6600; ">MSEC</a></p>
             </footer>
         </body>
         </html>





