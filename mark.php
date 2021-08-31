<?php 

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

$subjects=array(array("Communicative English","Engineering Mathematics-I","Engineering Physics","Engineering Chemistry","Problem Solving and Python Programming","Engineering Graphics","PSPP Lab","P&C Lab"),array("Technical English","Engineering Mathematics-II","Physics for Information Science","Basic Electrical,Electronics and Measurement Engineering","Environmental Science and Engineering","Programming in C","EPs Lab","CP Lab"),array("Discrete Mathematics","Digital Principles and Design","Data Structures","Object Oriented Programming","Communication Engineering","DS Lab","OOP Lab","DS Lab","Interpersonal Skills/Listening & Speaking"),array("Probability and Queuing Theory","Computer Architecture","Database Management Systems","Design and Analysis of Algorithms","Operating Systems","Software Engineering","DBMS Lab","OS Lab","Advance Reading and Writing"),array("Algebra and Number Theory","Computer Networks","Microprocessors and Microcontrollers","Theory of Computation","Object Oriented Analysis and Design","Open Elective I","MPMC Lab","OOAD Lab","CN Lab"),array("Internet Programming","Artificial Intelligence","Mobile Computing","Complier Design","Distributed Systems","Professional Elective I","IP lab","MAD Lab","Mini Project"),array("Principles of Management","Cryptography and Network Security","Cloud Computing","Open Elective II","Professional Elective II","Professional Elective III","CC Lab","Security Lab"),array("Professional Elective IV","Professional Elective V","Project Work"));

$sem=preg_split("/[\d]/", $_GET['name'], 2);
$count=1;
$total=0;
$bar=array(0,0,0,0,0,0,0,0,0);
$db_conn=get_db_connection();
        // Attempt select query execution
       if($sem[1]=='sem1')
       {
        $sql = "SELECT `id`, `comm_eng`, `math`, `eng_phy`, `eng_che`, `pspp`, `eng_gra`, `pspplab`, `pclab`, `gpa`, `cgpa` FROM msec.".$_GET['name'] ;
        if($result = mysqli_query($db_conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        if($row['comm_eng']=="U")
                        {
                            $bar[0]=$bar[0]+1;
                        }
                        if($row['math']=="U")
                        {
                            $bar[1]=$bar[1]+1;
                         }       
                        if($row['eng_phy']=="U")
                        {
                            $bar[2]=$bar[2]+1;
                        }
                        if($row['eng_che']=="U")
                        {
                            $bar[3]=$bar[3]+1;
                        }      
                        if($row['pspp']=="U")
                        {
                            $bar[4]=$bar[4]+1;
                        }         
                        if($row['eng_gra']=="U")
                        {
                            $bar[5]=$bar[5]+1;
                        }         
                        if($row['pspplab']=="U")
                        {
                            $bar[6]=$bar[6]+1;
                        }         
                        if($row['pclab']=="U")
                        {
                            $bar[7]=$bar[7]+1;
                        }
                    $total=$total+1;
                    }
                }
            }
        }
        else if($sem[1]=='sem2')
        {
            $sql = "SELECT `id`, `tech_eng`, `math`, `phy_is`, `beeme`, `evs`, `p_in_c`, `eplab`, `clab`, `gpa`, `cgpa` FROM msec.".$_GET['name'] ;
        if($result = mysqli_query($db_conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        if($row['tech_eng']=="U")
                        {
                            $bar[0]=$bar[0]+1;
                        }
                        if($row['math']=="U")
                        {
                            $bar[1]=$bar[1]+1;
                         }       
                        if($row['phy_is']=="U")
                        {
                            $bar[2]=$bar[2]+1;
                        }
                        if($row['beeme']=="U")
                        {
                            $bar[3]=$bar[3]+1;
                        }      
                        if($row['evs']=="U")
                        {
                            $bar[4]=$bar[4]+1;
                        }         
                        if($row['p_in_c']=="U")
                        {
                            $bar[5]=$bar[5]+1;
                        }         
                        if($row['eplab']=="U")
                        {
                            $bar[6]=$bar[6]+1;
                        }         
                        if($row['clab']=="U")
                        {
                            $bar[7]=$bar[7]+1;
                        }
                    $total=$total+1;
                    }
                }
            }
        }
        else if($sem[1]=='sem3')
        {
             $sql = "SELECT `id` , `rollno`, `name`, `discˍmath`, `dpsd`, `ds`, `oops`, `ce`, `dslab`, `oopslab`, `dpsdlab`,`isllab`, `gpa`, `cgpa` FROM msec.".$_GET['name'] ;
        if($result = mysqli_query($db_conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        if($row['disc_math']=="U")
                        {
                            $bar[0]=$bar[0]+1;
                        }
                        if($row['dpsd']=="U")
                        {
                            $bar[1]=$bar[1]+1;
                         }       
                        if($row['ds']=="U")
                        {
                            $bar[2]=$bar[2]+1;
                        }
                        if($row['oops']=="U")
                        {
                            $bar[3]=$bar[3]+1;
                        }      
                        if($row['ce']=="U")
                        {
                            $bar[4]=$bar[4]+1;
                        }         
                        if($row['dslab']=="U")
                        {
                            $bar[5]=$bar[5]+1;
                        }         
                        if($row['oopslab']=="U")
                        {
                            $bar[6]=$bar[6]+1;
                        }         
                        if($row['dpsdlab']=="U")
                        {
                            $bar[7]=$bar[7]+1;
                        }
                        if($row['isllab']=="U")
                        {
                            $bar[8]=$bar[8]+1;
                        }
                    $total=$total+1;
                    }
                }
            }
        }
        else if($sem[1]=='sem4')
        {
            $sql = "SELECT `id` , `rollno`, `name`,`pqt`, `ca`, `dbms`, `daa`, `os`, `se`, `dbmslab`, `oslab`,`awa`, `gpa`, `cgpa` FROM FROM msec.".$_GET['name'] ;
        if($result = mysqli_query($db_conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        if($row['pqt']=="U")
                        {
                            $bar[0]=$bar[0]+1;
                        }
                        if($row['ca']=="U")
                        {
                            $bar[1]=$bar[1]+1;
                        }
                        if($row['dbms']=="U")
                        {
                            $bar[2]=$bar[2]+1;
                        }      
                        if($row['daa']=="U")
                        {
                            $bar[3]=$bar[3]+1;
                        }         
                        if($row['os']=="U")
                        {
                            $bar[4]=$bar[4]+1;
                        }         
                        if($row['se']=="U")
                        {
                            $bar[5]=$bar[5]+1;
                        }         
                        if($row['dbmslab']=="U")
                        {
                            $bar[6]=$bar[6]+1;
                        }
                        if($row['oslab']=="U")
                        {
                            $bar[7]=$bar[7]+1;
                        }
                        if($row['awa']=="U")
                        {
                            $bar[8]=$bar[8]+1;
                        }
                    $total=$total+1;
                    }
                }
            }
        }
        
        else if($sem[1]=='sem5')
        {
             $sql = "SELECT `id` , `rollno`, `name`,`ant`, `cn`, `mpmc`, `toc`, `ooad`, `oe1`, `mpmclab`, `ooadlab`, `cnlab`, `gpa`, `cgpa` FROM msec.".$_GET['name'] ;
        if($result = mysqli_query($db_conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        if($row['ant']=="U")
                        {
                            $bar[0]=$bar[0]+1;
                        }
                        if($row['cn']=="U")
                        {
                            $bar[1]=$bar[1]+1;
                        }
                        if($row['mpmc']=="U")
                        {
                            $bar[2]=$bar[2]+1;
                        }      
                        if($row['toc']=="U")
                        {
                            $bar[3]=$bar[3]+1;
                        }         
                        if($row['ooad']=="U")
                        {
                            $bar[4]=$bar[4]+1;
                        }         
                        if($row['oe1']=="U")
                        {
                            $bar[5]=$bar[5]+1;
                        }         
                        if($row['mpmclab']=="U")
                        {
                            $bar[6]=$bar[6]+1;
                        }
                        if($row['ooadlab']=="U")
                        {
                            $bar[7]=$bar[7]+1;
                        }
                        if($row['cnlab']=="U")
                        {
                            $bar[8]=$bar[8]+1;
                        }
                    $total=$total+1;
                    }
                }
            }
        }
        else if($sem[1]=='sem6')
        {
            $sql = "SELECT `id` , `rollno`, `name`,`ip`, `ai`, `mc`, `cd`, `ds`, `pe1`, `iplab`, `madlab`, `minipr`, `gpa`, `cgpa` FROM FROM msec.".$_GET['name'] ;
        if($result = mysqli_query($db_conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        if($row['ip']=="U")
                        {
                            $bar[0]=$bar[0]+1;
                        }
                        if($row['ai']=="U")
                        {
                            $bar[1]=$bar[1]+1;
                        }
                        if($row['mc']=="U")
                        {
                            $bar[2]=$bar[2]+1;
                        }      
                        if($row['cd']=="U")
                        {
                            $bar[3]=$bar[3]+1;
                        }         
                        if($row['ds']=="U")
                        {
                            $bar[4]=$bar[4]+1;
                        }         
                        if($row['pe1']=="U")
                        {
                            $bar[5]=$bar[5]+1;
                        }         
                        if($row['iplab']=="U")
                        {
                            $bar[6]=$bar[6]+1;
                        }
                        if($row['madlab']=="U")
                        {
                            $bar[7]=$bar[7]+1;
                        }
                        if($row['minipr']=="U")
                        {
                            $bar[8]=$bar[8]+1;
                        }
                    $total=$total+1;
                    }
                }
            }
        }
        else if($sem[1]=='sem7')
        {
            $sql = "SELECT `id` , `rollno`, `name`, `pom`, `cns`, `cc`, `oe2`, `pe2`, `pe3`, `cclab`, `seclab`, `gpa`, `cgpa` FROM FROM msec.".$_GET['name'] ;
        if($result = mysqli_query($db_conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        if($row['pom']=="U")
                        {
                            $bar[0]=$bar[0]+1;
                        }
                        if($row['cns']=="U")
                        {
                            $bar[1]=$bar[1]+1;
                        }
                        if($row['cc']=="U")
                        {
                            $bar[2]=$bar[2]+1;
                        }      
                        if($row['oe2']=="U")
                        {
                            $bar[3]=$bar[3]+1;
                        }         
                        if($row['pe2']=="U")
                        {
                            $bar[4]=$bar[4]+1;
                        }         
                        if($row['pe3']=="U")
                        {
                            $bar[5]=$bar[5]+1;
                        }         
                        if($row['cclab']=="U")
                        {
                            $bar[6]=$bar[6]+1;
                        }
                        if($row['seclab']=="U")
                        {
                            $bar[7]=$bar[7]+1;
                        }
                    $total=$total+1;
                    }
                }
            }
        }
        else if($sem[1]=='sem8')
        {
           $sql = "SELECT `id` , `rollno`, `name`, `pe4`, `pe5`, `project`, `gpa`, `cgpa` FROM FROM msec.".$_GET['name'] ;
        if($result = mysqli_query($db_conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        if($row['pe4']=="U")
                        {
                            $bar[0]=$bar[0]+1;
                        }
                        if($row['pe5']=="U")
                        {
                            $bar[1]=$bar[1]+1;
                        }
                        if($row['project']=="U")
                        {
                            $bar[2]=$bar[2]+1;
                        }      
                        
                    $total=$total+1;
                    }
                }
            }
        }

?>
<!DOCTYPE html>
<html>
<head>
    <title>MARKS | MSEC</title>
    <link rel="icon" href="logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <style type="text/css">
        body {font-family: sans-serif}
.w3-theme{
    color: #fff!important;
}
        .w3-bar-block .w3-bar-item {
          padding: 16px!important;
          font-weight: bold;
        }
        .w3-bar-item{
            padding: 16px;
            letter-spacing: 1px;
            font-weight: bold;
            background-color:#25274d;
            color: #aaabb8;
                }
        .w3-bar-item:hover {
            padding: 16px;
            letter-spacing: 1px;
            font-weight: bold;
            color:  #aaabb8!important;
            background-color:#29648a!important;

                }
        .bluecolor {
            background-color:#25274d!important;
                }
        .w3-leftbar{
            border-left:#1E6091!important;
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
        td {overflow:hidden; white-space:nowrap}
        .grid-container {
          display: grid;
          grid: 300px / auto auto;
          grid-gap: 50px;
          padding: 10px;
        }

        .headd{
            color: #aaabb8;
            text-shadow: 2px 2px 1px #000000!important;
        }

    </style>
</head>
<body>

    <nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card bluecolor topnav" style="z-index:3;width:250px;" id="mySidebar">
            <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="home.php"><p style="width:80%; font-size: 150%; text-align: center; text-shadow: 1px 1px 3px #000000">MSEC CSE</p> </a>
            <a class="w3-bar-item w3-leftbar w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>

     
            <a class="w3-bar-item w3-button " href="semester.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch'] ;?>"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Students</a>
            <a class="w3-bar-item w3-button" href="personaldetails.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch'] ;?>"><i class='far fa-folder-open' ></i> Personal Details</a>
            <a class="w3-bar-item w3-button active" href="#"><i class='far fa-edit'></i> Marks</a>
            <a class="w3-bar-item w3-button" href="aep.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class='fas fa-book-reader'></i> AEP</a>
            <a class="w3-bar-item w3-button" href="weak.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class='fas fa-chalkboard-teacher'></i> Weak</a>
             <a class="w3-bar-item w3-button" href="attendance.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class='far fa-calendar-check'></i> Attendance</a>
            <a class="w3-bar-item w3-button" href="ecube.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class='fas fa-users'></i> E-Cube</a>
            <a class="w3-bar-item w3-button" href="intern.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class="fa fa-laptop" aria-hidden="true"></i> Intern</a>
            <a class="w3-bar-item w3-button" href="iv.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class='fas fa-map-marked-alt'></i> Industrial Visit</a>
            <a class="w3-bar-item w3-button" href="summary.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class='fas fa-user-graduate'></i> Indvidual Summary</a>
    </nav>


     <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

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
                        echo' <h1 class="w3-xxxlarge headd" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">BATCH 1</h1>';
                      }
                      else if($_GET['batch']=='batch2')
                       {
                        echo' <h1 class="w3-xxxlarge headd" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">BATCH 2</h1>';
                      }
                      else if($_GET['batch']=='batch3')
                       {
                        echo' <h1 class="w3-xxxlarge headd" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">BATCH 3</h1>';
                      }
                      else if($_GET['batch']=='batch4')
                       {
                        echo' <h1 class="w3-xxxlarge" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">BATCH 4</h1>';
                      }

                    if($sem[1]=="sem1")
                    {
                    echo'<H2 class="w3-xxxlarge headd" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 1</H2>';
                    }
                    else if($sem[1]=="sem2")
                    {
                    echo'<H2 class="w3-xxxlarge headd" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 2</H2>';
                    }
                     else if($sem[1]=="sem3")
                    {
                    echo'<H2 class="w3-xxxlarge headd" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 3</H2>';
                    }
                     else if($sem[1]=="sem4")
                    {
                    echo'<H2 class="w3-xxxlarge headd" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 4</H2>';
                    }
                     else if($sem[1]=="sem5")
                    {
                    echo'<H2 class="w3-xxxlarge headd" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 5</H2>';
                    }
                     else if($sem[1]=="sem6")
                    {
                    echo'<H2 class="w3-xxxlarge headd" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 6</H2>';
                    }
                     else if($sem[1]=="sem7")
                    {
                    echo'<H2 class="w3-xxxlarge headd" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 7</H2>';
                    }
                     else if($sem[1]=="sem8")
                    {
                    echo'<H2 class="w3-xxxlarge headd" style="font-size: 60px!important;font-weight: bold;text-shadow: 1px 1px 3px #000000;">SEMESTER 8</H2>';
                    }
                    ?>

                    </header>

    <div class="w3-container" style="padding:32px">
        
        <H3 class="w3-xxxlarge" style="font-size: 40px!important;font-weight: bold;color: #464866!important;">PASS PERCENTAGE:</H3>
        <?php
        if($sem[1]=='sem1')
            {
               echo" <div class=\"grid-container\">
               <div class=\"item1\">
               <p>".$subjects[0][0]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[0])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[0])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[0][1]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[1])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[1])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[0][2]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[2])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[2])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[0][3]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[3])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[3])/(int)$total)*100)."%</div>
          </div>
          </div>
          <div class=\"item2\">
          <p>".$subjects[0][4]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[4])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[4])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[0][5]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[5])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[5])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[0][6]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[6])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[6])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[0][7]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[7])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[7])/(int)$total)*100)."%</div>
          </div>
          </div>
          </div>";
      }
      else if($sem[1]=='sem2')
      {
            echo" <div class=\"grid-container\">
               <div class=\"item1\">
               <p>".$subjects[1][0]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[0])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[0])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[1][1]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[1])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[1])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[1][2]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[2])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[2])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[1][3]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[3])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[3])/(int)$total)*100)."%</div>
          </div>
          </div>
          <div class=\"item2\">
          <p>".$subjects[1][4]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[4])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[4])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[1][5]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[5])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[5])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[1][6]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[6])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[6])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[1][7]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[7])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[7])/(int)$total)*100)."%</div>
          </div>
          </div>
          </div>";

      }
      else if($sem[1]=='sem3')
      {
        echo" <div class=\"grid-container\">
               <div class=\"item1\">
               <p>".$subjects[2][0]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[0])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[0])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[2][1]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[1])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[1])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[2][2]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[2])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[2])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[2][3]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[3])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[3])/(int)$total)*100)."%</div>
          </div>
          </div>
          <div class=\"item2\">
          <p>".$subjects[2][4]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[4])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[4])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[2][5]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[5])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[5])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[2][6]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[6])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[6])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[2][7]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[7])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[7])/(int)$total)*100)."%</div>
            </div><br>
          <p>".$subjects[2][8]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[8])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[8])/(int)$total)*100)."%</div>
          </div>
          </div>
          </div>";
      }
      else if($sem[1]=='sem4')
      {
        echo" <div class=\"grid-container\">
               <div class=\"item1\">
               <p>".$subjects[3][0]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[0])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[0])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[3][1]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[1])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[1])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[3][2]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[2])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[2])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[3][3]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[3])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[3])/(int)$total)*100)."%</div>
          </div>
          </div>
          <div class=\"item2\">
          <p>".$subjects[3][4]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[4])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[4])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[3][5]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[5])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[5])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[3][6]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[6])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[6])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[3][7]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[7])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[7])/(int)$total)*100)."%</div>
            </div><br>
          <p>".$subjects[3][8]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[8])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[8])/(int)$total)*100)."%</div>
          </div>
          </div>
          </div>";
      }
      else if($sem[1]=='sem5')
      {
        echo" <div class=\"grid-container\">
               <div class=\"item1\">
               <p>".$subjects[4][0]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[0])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[0])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[4][1]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[1])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[1])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[4][2]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[2])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[2])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[4][3]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[3])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[3])/(int)$total)*100)."%</div>
          </div>
          </div>
          <div class=\"item2\">
          <p>".$subjects[4][4]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[4])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[4])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[4][5]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[5])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[5])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[4][6]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[6])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[6])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[4][7]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[7])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[7])/(int)$total)*100)."%</div>
            </div><br>
          <p>".$subjects[4][8]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[8])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[8])/(int)$total)*100)."%</div>
          </div>
          </div>
          </div>";
      }
      else if($sem[1]=='sem6')
      {
        echo" <div class=\"grid-container\">
               <div class=\"item1\">
               <p>".$subjects[2][0]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[0])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[0])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[5][1]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[1])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[1])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[5][2]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[2])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[2])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[5][3]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[3])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[3])/(int)$total)*100)."%</div>
          </div>
          </div>
          <div class=\"item2\">
          <p>".$subjects[5][4]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[4])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[4])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[5][5]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[5])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[5])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[5][6]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[6])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[6])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[5][7]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[7])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[7])/(int)$total)*100)."%</div>
            </div><br>
          <p>".$subjects[5][8]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[8])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[8])/(int)$total)*100)."%</div>
          </div>
          </div>
          </div>";
      }
      else if($sem[1]=='sem7')
      {
        echo" <div class=\"grid-container\">
               <div class=\"item1\">
               <p>".$subjects[6][0]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[0])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[0])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[6][1]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[1])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[1])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[6][2]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[2])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[2])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[6][3]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[3])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[3])/(int)$total)*100)."%</div>
          </div>
          </div>
          <div class=\"item2\">
          <p>".$subjects[6][4]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[4])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[4])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[6][5]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[5])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[5])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[6][6]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[6])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[6])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[6][7]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[7])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[7])/(int)$total)*100)."%</div>
            
          </div>
          </div>
          </div>";
      }
      else if($sem[1]=='sem8')
      {
        echo" <div class=\"grid-container\">
               <div class=\"item1\">
               <p>".$subjects[7][0]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[0])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[0])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[7][1]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[1])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[1])/(int)$total)*100)."%</div>
          </div><br>
          <p>".$subjects[7][2]."</p>
          <div class=\"w3-light-grey w3-round-xlarge w3-small\">
            <div class=\"w3-container w3-center w3-round-xlarge \" style=\"background-color:#2e9cca;width:".((((int)$total-(int)$bar[2])/(int)$total)*100)."%\">".((((int)$total-(int)$bar[2])/(int)$total)*100)."%</div>
          </div>
          </div>
          </div>";
      }

      ?>

      <H3 class="w3-xxxlarge" style="font-size: 40px!important;font-weight: bold; color: #464866!important;">LIST OF STUDENTS:</H3>
     <a href="add.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>" class="btn btn-success pull-left" style="background-color: #2e9cca; border-color: #76C893; color: black;"><i class="fa fa-plus"></i><b>  ADD</b></a> &nbsp; &nbsp;
    
      <button onclick="ExportToExcel('xlsx')" class="btn btn-success pull-right" style="background-color: #2e9cca; border-color: #76C893; color: black;"><i class="fa fa-download" aria-hidden="true"></i><b>  EXPORT</b></button>
     <br><br><br>

     <?php
        // Include config file
        
        $db_conn=get_db_connection();
        // Attempt select query execution
        if($sem[1]=='sem1')
            {
                $sql = "SELECT `id`, `rollno`, `name`, `comm_eng`, `math`, `eng_phy`, `eng_che`, `pspp`, `eng_gra`, `pspplab`, `pclab`, `gpa`, `cgpa` FROM msec.".$_GET['name'] ;
        if($result = mysqli_query($db_conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo '<div style="overflow-x:auto;">';
                echo '<table  class="table table-bordered table-striped" id="customers">';
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>S.NO.</th>";
                            echo "<th>NAME</th>";
                            echo "<th>REGISTER NUMBER</th>";
                            echo "<th>".$subjects[0][0]."</th>";
                            echo "<th>".$subjects[0][1]."</th>";
                            echo "<th>".$subjects[0][2]."</th>";
                            echo "<th>".$subjects[0][3]."</th>";
                            echo "<th>".$subjects[0][4]."</th>";
                            echo "<th>".$subjects[0][5]."</th>";
                            echo "<th>".$subjects[0][6]."</th>";
                            echo "<th>".$subjects[0][7]."</th>";
                            echo "<th>GPA</th>";
                            echo "<th>CGPA</th>";
                            echo "<th style=\"text-align:center\">ACTION</th>";
                        echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $count . "</td>";
                            echo "<td><a href=\"summary.php?name=".$_GET['name']."&batch=".$_GET['batch']."&id=".$row['rollno']." \">" . $row['name'] . "</a></td>";
                            echo "<td>" . $row['rollno'] . "</td>";
                            echo "<td>" . $row['comm_eng'] . "</td>";
                            echo "<td>" . $row['math'] . "</td>";
                            echo "<td>" . $row['eng_phy'] . "</td>";
                            echo "<td>" . $row['eng_che'] . "</td>";
                            echo "<td>" . $row['pspp'] . "</td>";
                            echo "<td>" . $row['eng_gra'] . "</td>";
                            echo "<td>" . $row['pspplab'] . "</td>";
                            echo "<td>" . $row['pclab'] . "</td>";
                            echo "<td>" . $row['gpa'] . "</td>";
                            echo "<td>" . $row['cgpa'] . "</td>";
                            echo "<td>";
                                
                                echo '<a style="color:blue; font-weight: bolder;" href="update.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil">&nbsp <b> EDIT </b> &nbsp</span></a>';
                                echo '<a style="color:red;" href="delete.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" title="Delete Record" data-toggle="tooltip"><span  class="fa fa-trash">&nbsp <b> DELETE &nbsp</b></span></a>';
                            echo "</td>";
                        echo "</tr>";
                       
                        $count=$count+1;
                    }
                    echo "</tbody>";                            
                echo "</table>";
                echo "</div>";
                // Free result set
                mysqli_free_result($result);
            } else{
                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
            }
        } else{
            echo '<div class="alert alert-danger"><em>No records were found!.</em></div>';
        }
    }
    else  if($sem[1]=='sem2')
            {
                $sql = "SELECT `id`, `rollno`, `name`,  `tech_eng`, `math`, `phy_is`, `beeme`, `evs`, `p_in_c`, `eplab`, `clab`, `gpa`, `cgpa` FROM msec.".$_GET['name'] ;
        if($result = mysqli_query($db_conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo '<div style="overflow-x:auto;">';
                echo '<table  class="table table-bordered table-striped" id="customers">';
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>ID</th>";
                            echo "<th>NAME</th>";
                            echo "<th>REGISTER NUMBER</th>";
                            echo "<th>".$subjects[1][0]."</th>";
                            echo "<th>".$subjects[1][1]."</th>";
                            echo "<th>".$subjects[1][2]."</th>";
                            echo "<th>".$subjects[1][3]."</th>";
                            echo "<th>".$subjects[1][4]."</th>";
                            echo "<th>".$subjects[1][5]."</th>";
                            echo "<th>".$subjects[1][6]."</th>";
                            echo "<th>".$subjects[1][7]."</th>";
                            echo "<th>GPA</th>";
                            echo "<th>CGPA</th>";
                            echo "<th style=\"text-align:center\">ACTION</th>";
                        echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td><a href=\"summary.php?name=".$_GET['name']." &batch=".$_GET['batch']."&id=".$row['rollno']." \">" . $row['name'] . "</a></td>";
                            echo "<td>" . $row['rollno'] . "</td>";
                            echo "<td>" . $row['tech_eng'] . "</td>";
                            echo "<td>" . $row['math'] . "</td>";
                            echo "<td>" . $row['phy_is'] . "</td>";
                            echo "<td>" . $row['beeme'] . "</td>";
                            echo "<td>" . $row['evs'] . "</td>";
                            echo "<td>" . $row['p_in_c'] . "</td>";
                            echo "<td>" . $row['eplab'] . "</td>";
                            echo "<td>" . $row['clab'] . "</td>";
                            echo "<td>" . $row['gpa'] . "</td>";
                            echo "<td>" . $row['cgpa'] . "</td>";
                            echo "<td>";
                                
                                echo '<a style="color:blue; font-weight: bolder;" href="update.php?id='. $row['rollno'] .'&batch'.$_GET['batch'].'&name='.$_GET['name'].'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil">&nbsp <b> EDIT </b> &nbsp</span></a>';
                                echo '<a style="color:red;" href="delete.php?id='. $row['rollno'] .'&batch'.$_GET['batch'].'&name='.$_GET['name'].'" title="Delete Record" data-toggle="tooltip"><span  class="fa fa-trash">&nbsp <b> DELETE &nbsp</b></span></a>';
                            echo "</td>";
                        echo "</tr>";
                       

                    }
                    echo "</tbody>";                            
                echo "</table>";
                echo "</div>";
                // Free result set
                mysqli_free_result($result);
            } else{
                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
            }
        } else{
            echo '<div class="alert alert-danger"><em>No records were found!.</em></div>';
        }
    }
    else if($sem[1]=='sem3')
    {

                $sql = "SELECT `id` , `rollno`, `name`, `discˍmath`, `dpsd`, `ds`, `oops`, `ce`, `dslab`, `oopslab`, `dpsdlab`,`isllab`, `gpa`, `cgpa` FROM msec.".$_GET['name'] ;
            if($result = mysqli_query($db_conn, $sql)){
                if(mysqli_num_rows($result) > 0 ){
                    echo '<div style="overflow-x:auto;">';
                    echo '<table  class="table table-bordered table-striped" id="customers">';
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>S.NO.</th>";
                    echo "<th>NAME</th>";
                    echo "<th>REGISTER NUMBER</th>";
                    echo "<th>".$subjects[2][0]."</th>";
                    echo "<th>".$subjects[2][1]."</th>";
                    echo "<th>".$subjects[2][2]."</th>";
                    echo "<th>".$subjects[2][3]."</th>";
                    echo "<th>".$subjects[2][4]."</th>";
                    echo "<th>".$subjects[2][5]."</th>";
                    echo "<th>".$subjects[2][6]."</th>";
                    echo "<th>".$subjects[2][7]."</th>";
                    echo "<th>".$subjects[2][8]."</th>";
                    echo "<th>GPA</th>";
                    echo "<th>CGPA</th>";
                    echo "<th style=\"text-align:center\">ACTION</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while(($row = mysqli_fetch_array($result)) && ($count<11)){
                        echo "<tr>";
                        echo "<td>" . $count . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['rollno'] . "</td>";
                        echo "<td>" . $row['disc_math'] . "</td>";
                        echo "<td>" . $row['dpsd'] . "</td>";
                        echo "<td>" . $row['ds'] . "</td>";
                        echo "<td>" . $row['oops'] . "</td>";
                        echo "<td>" . $row['ce'] . "</td>";
                        echo "<td>" . $row['dslab'] . "</td>";
                        echo "<td>" . $row['oopslab'] . "</td>";
                        echo "<td>" . $row['dpsdlab'] . "</td>";
                        echo "<td>" . $row['isllab'] . "</td>";
                        echo "<td>" . $row['gpa'] . "</td>";
                        echo "<td>" . $row['cgpa'] . "</td>";
                        echo "<td>";

                        echo '<a style="color:blue; font-weight: bolder;" href="update.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil">&nbsp <b> EDIT </b> &nbsp</span></a>';
                        echo '<a style="color:red;" href="delete.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" title="Delete Record" data-toggle="tooltip"><span  class="fa fa-trash">&nbsp <b> DELETE &nbsp</b></span></a>';
                        echo "</td>";
                        echo "</tr>";

                        $count=$count+1;
                    }
                    echo "</tbody>";                            
                    echo "</table>";
                    echo "</div>";
                // Free result set
                    mysqli_free_result($result);
                } else{
                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                }
            } else{
                echo '<div class="alert alert-danger"><em>No records were found!.</em></div>';
            }
    }
    else if($sem[1]=='sem4')
    {

                $sql = "SELECT `id` , `rollno`, `name`,`pqt`, `ca`, `dbms`, `daa`, `os`, `se`, `dbmslab`, `oslab`,`awa`, `gpa`, `cgpa` FROM FROM msec.".$_GET['name'] ;
            if($result = mysqli_query($db_conn, $sql)){
                if(mysqli_num_rows($result) > 0 ){
                    echo '<div style="overflow-x:auto;">';
                    echo '<table  class="table table-bordered table-striped" id="customers">';
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>S.NO.</th>";
                    echo "<th>NAME</th>";
                    echo "<th>REGISTER NUMBER</th>";
                    echo "<th>".$subjects[3][0]."</th>";
                    echo "<th>".$subjects[3][1]."</th>";
                    echo "<th>".$subjects[3][2]."</th>";
                    echo "<th>".$subjects[3][3]."</th>";
                    echo "<th>".$subjects[3][4]."</th>";
                    echo "<th>".$subjects[3][5]."</th>";
                    echo "<th>".$subjects[3][6]."</th>";
                    echo "<th>".$subjects[3][7]."</th>";
                    echo "<th>".$subjects[3][8]."</th>";
                    echo "<th>GPA</th>";
                    echo "<th>CGPA</th>";
                    echo "<th style=\"text-align:center\">ACTION</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while(($row = mysqli_fetch_array($result)) && ($count<11)){
                        echo "<tr>";
                        echo "<td>" . $count . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['rollno'] . "</td>";
                        echo "<td>" . $row['pqt'] . "</td>";
                        echo "<td>" . $row['ca'] . "</td>";
                        echo "<td>" . $row['dbms'] . "</td>";
                        echo "<td>" . $row['daa'] . "</td>";
                        echo "<td>" . $row['os'] . "</td>";
                        echo "<td>" . $row['se'] . "</td>";
                        echo "<td>" . $row['dbṁslab'] . "</td>";
                        echo "<td>" . $row['oslab'] . "</td>";
                        echo "<td>" . $row['awa'] . "</td>";
                        echo "<td>" . $row['gpa'] . "</td>";
                        echo "<td>" . $row['cgpa'] . "</td>";
                        echo "<td>";

                        echo '<a style="color:blue; font-weight: bolder;" href="update.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil">&nbsp <b> EDIT </b> &nbsp</span></a>';
                        echo '<a style="color:red;" href="delete.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" title="Delete Record" data-toggle="tooltip"><span  class="fa fa-trash">&nbsp <b> DELETE &nbsp</b></span></a>';
                        echo "</td>";
                        echo "</tr>";

                        $count=$count+1;
                    }
                    echo "</tbody>";                            
                    echo "</table>";
                    echo "</div>";
                // Free result set
                    mysqli_free_result($result);
                } else{
                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                }
            } else{
                echo '<div class="alert alert-danger"><em>No records were found!.</em></div>';
            }
    }
    else if($sem[1]=='sem5')
    {

                $sql = "SELECT `id` , `rollno`, `name`,`ant`, `cn`, `mpmc`, `toc`, `ooad`, `oe1`, `mpmclab`, `ooadlab`, `cnlab`, `gpa`, `cgpa` FROM msec.".$_GET['name'] ;
            if($result = mysqli_query($db_conn, $sql)){
                if(mysqli_num_rows($result) > 0 ){
                    echo '<div style="overflow-x:auto;">';
                    echo '<table  class="table table-bordered table-striped" id="customers">';
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>S.NO.</th>";
                    echo "<th>NAME</th>";
                    echo "<th>REGISTER NUMBER</th>";
                    echo "<th>".$subjects[4][0]."</th>";
                    echo "<th>".$subjects[4][1]."</th>";
                    echo "<th>".$subjects[4][2]."</th>";
                    echo "<th>".$subjects[4][3]."</th>";
                    echo "<th>".$subjects[4][4]."</th>";
                    echo "<th>".$subjects[4][5]."</th>";
                    echo "<th>".$subjects[4][6]."</th>";
                    echo "<th>".$subjects[4][7]."</th>";
                    echo "<th>".$subjects[4][8]."</th>";
                    echo "<th>GPA</th>";
                    echo "<th>CGPA</th>";
                    echo "<th style=\"text-align:center\">ACTION</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while(($row = mysqli_fetch_array($result)) && ($count<11)){
                        echo "<tr>";
                        echo "<td>" . $count . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['rollno'] . "</td>";
                        echo "<td>" . $row['ant'] . "</td>";
                        echo "<td>" . $row['cn'] . "</td>";
                        echo "<td>" . $row['mpmc'] . "</td>";
                        echo "<td>" . $row['toc'] . "</td>";
                        echo "<td>" . $row['ooad'] . "</td>";
                        echo "<td>" . $row['oe1'] . "</td>";
                        echo "<td>" . $row['mpmclab'] . "</td>";
                        echo "<td>" . $row['ooadlab'] . "</td>";
                        echo "<td>" . $row['cnlab'] . "</td>";
                        echo "<td>" . $row['gpa'] . "</td>";
                        echo "<td>" . $row['cgpa'] . "</td>";
                        echo "<td>";

                        echo '<a style="color:blue; font-weight: bolder;" href="update.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil">&nbsp <b> EDIT </b> &nbsp</span></a>';
                        echo '<a style="color:red;" href="delete.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" title="Delete Record" data-toggle="tooltip"><span  class="fa fa-trash">&nbsp <b> DELETE &nbsp</b></span></a>';
                        echo "</td>";
                        echo "</tr>";

                        $count=$count+1;
                    }
                    echo "</tbody>";                            
                    echo "</table>";
                    echo "</div>";
                // Free result set
                    mysqli_free_result($result);
                } else{
                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                }
            } else{
                echo '<div class="alert alert-danger"><em>No records were found!.</em></div>';
            }
    }
    else if($sem[1]=='sem6')
    {

                $sql = "SELECT `id` , `rollno`, `name`,`ip`, `ai`, `mc`, `cd`, `ds`, `pe1`, `iplab`, `madlab`, `minipr`, `gpa`, `cgpa` FROM FROM msec.".$_GET['name'] ;
            if($result = mysqli_query($db_conn, $sql)){
                if(mysqli_num_rows($result) > 0 ){
                    echo '<div style="overflow-x:auto;">';
                    echo '<table  class="table table-bordered table-striped" id="customers">';
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>S.NO.</th>";
                    echo "<th>NAME</th>";
                    echo "<th>REGISTER NUMBER</th>";
                    echo "<th>".$subjects[5][0]."</th>";
                    echo "<th>".$subjects[5][1]."</th>";
                    echo "<th>".$subjects[5][2]."</th>";
                    echo "<th>".$subjects[5][3]."</th>";
                    echo "<th>".$subjects[5][4]."</th>";
                    echo "<th>".$subjects[5][5]."</th>";
                    echo "<th>".$subjects[5][6]."</th>";
                    echo "<th>".$subjects[5][7]."</th>";
                    echo "<th>".$subjects[5][8]."</th>";
                    echo "<th>GPA</th>";
                    echo "<th>CGPA</th>";
                    echo "<th style=\"text-align:center\">ACTION</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while(($row = mysqli_fetch_array($result)) && ($count<11)){
                        echo "<tr>";
                        echo "<td>" . $count . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['rollno'] . "</td>";
                        echo "<td>" . $row['ip'] . "</td>";
                        echo "<td>" . $row['ai'] . "</td>";
                        echo "<td>" . $row['mc'] . "</td>";
                        echo "<td>" . $row['cd'] . "</td>";
                        echo "<td>" . $row['ds'] . "</td>";
                        echo "<td>" . $row['pe1'] . "</td>";
                        echo "<td>" . $row['iplab'] . "</td>";
                        echo "<td>" . $row['madlab'] . "</td>";
                        echo "<td>" . $row['minipr'] . "</td>";
                        echo "<td>" . $row['gpa'] . "</td>";
                        echo "<td>" . $row['cgpa'] . "</td>";
                        echo "<td>";

                        echo '<a style="color:blue; font-weight: bolder;" href="update.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil">&nbsp <b> EDIT </b> &nbsp</span></a>';
                        echo '<a style="color:red;" href="delete.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" title="Delete Record" data-toggle="tooltip"><span  class="fa fa-trash">&nbsp <b> DELETE &nbsp</b></span></a>';
                        echo "</td>";
                        echo "</tr>";

                        $count=$count+1;
                    }
                    echo "</tbody>";                            
                    echo "</table>";
                    echo "</div>";
                // Free result set
                    mysqli_free_result($result);
                } else{
                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                }
            } else{
                echo '<div class="alert alert-danger"><em>No records were found!.</em></div>';
            }
    }
    else if($sem[1]=='sem7')
    {

            $sql = "SELECT `id` , `rollno`, `name`, `pom`, `cns`, `cc`, `oe2`, `pe2`, `pe3`, `cclab`, `seclab`, `gpa`, `cgpa` FROM FROM msec.".$_GET['name'] ;
        if($result = mysqli_query($db_conn, $sql)){
            if(mysqli_num_rows($result) > 0 ){
                echo '<div style="overflow-x:auto;">';
                echo '<table  class="table table-bordered table-striped" id="customers">';
                echo "<thead>";
                echo "<tr>";
                echo "<th>S.NO.</th>";
                echo "<th>NAME</th>";
                echo "<th>REGISTER NUMBER</th>";
                echo "<th>".$subjects[6][0]."</th>";
                echo "<th>".$subjects[6][1]."</th>";
                echo "<th>".$subjects[6][2]."</th>";
                echo "<th>".$subjects[6][3]."</th>";
                echo "<th>".$subjects[6][4]."</th>";
                echo "<th>".$subjects[6][5]."</th>";
                echo "<th>".$subjects[6][6]."</th>";
                echo "<th>".$subjects[6][7]."</th>";
                echo "<th>GPA</th>";
                echo "<th>CGPA</th>";
                echo "<th style=\"text-align:center\">ACTION</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while(($row = mysqli_fetch_array($result)) && ($count<11)){
                    echo "<tr>";
                    echo "<td>" . $count . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['rollno'] . "</td>";
                    echo "<td>" . $row['pom'] . "</td>";
                    echo "<td>" . $row['cns'] . "</td>";
                    echo "<td>" . $row['cc'] . "</td>";
                    echo "<td>" . $row['oe2'] . "</td>";
                    echo "<td>" . $row['pe2'] . "</td>";
                    echo "<td>" . $row['pe3'] . "</td>";
                    echo "<td>" . $row['cclab'] . "</td>";
                    echo "<td>" . $row['seclab'] . "</td>";
                    echo "<td>" . $row['gpa'] . "</td>";
                    echo "<td>" . $row['cgpa'] . "</td>";
                    echo "<td>";

                    echo '<a style="color:blue; font-weight: bolder;" href="update.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil">&nbsp <b> EDIT </b> &nbsp</span></a>';
                    echo '<a style="color:red;" href="delete.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" title="Delete Record" data-toggle="tooltip"><span  class="fa fa-trash">&nbsp <b> DELETE &nbsp</b></span></a>';
                    echo "</td>";
                    echo "</tr>";

                    $count=$count+1;
                }
                echo "</tbody>";                            
                echo "</table>";
                echo "</div>";
                // Free result set
                mysqli_free_result($result);
            } else{
                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
            }
        } else{
            echo '<div class="alert alert-danger"><em>No records were found!.</em></div>';
        }
    }
    else if($sem[1]=='sem8')
    {

            $sql = "SELECT `id` , `rollno`, `name`, `pe4`, `pe5`, `project`, `gpa`, `cgpa` FROM FROM msec.".$_GET['name'] ;
        if($result = mysqli_query($db_conn, $sql)){
            if(mysqli_num_rows($result) > 0 ){
                echo '<div style="overflow-x:auto;">';
                echo '<table  class="table table-bordered table-striped" id="customers">';
                echo "<thead>";
                echo "<tr>";
                echo "<th>S.NO.</th>";
                echo "<th>NAME</th>";
                echo "<th>REGISTER NUMBER</th>";
                echo "<th>".$subjects[7][0]."</th>";
                echo "<th>".$subjects[7][1]."</th>";
                echo "<th>".$subjects[7][2]."</th>";
                echo "<th>GPA</th>";
                echo "<th>CGPA</th>";
                echo "<th style=\"text-align:center\">ACTION</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while(($row = mysqli_fetch_array($result)) && ($count<11)){
                    echo "<tr>";
                    echo "<td>" . $count . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['rollno'] . "</td>";
                    echo "<td>" . $row['pe4'] . "</td>";
                    echo "<td>" . $row['pe5'] . "</td>";
                    echo "<td>" . $row['project'] . "</td>";
                    echo "<td>" . $row['gpa'] . "</td>";
                    echo "<td>" . $row['cgpa'] . "</td>";
                    echo "<td>";

                    echo '<a style="color:blue; font-weight: bolder;" href="update.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil">&nbsp <b> EDIT </b> &nbsp</span></a>';
                    echo '<a style="color:red;" href="delete.php?id='. $row['rollno'] .'&batch='.$_GET['batch'].'&name='.$_GET['name'].'" title="Delete Record" data-toggle="tooltip"><span  class="fa fa-trash">&nbsp <b> DELETE &nbsp</b></span></a>';
                    echo "</td>";
                    echo "</tr>";

                    $count=$count+1;
                }
                echo "</tbody>";                            
                echo "</table>";
                echo "</div>";
                // Free result set
                mysqli_free_result($result);
            } else{
                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
            }
        } else{
            echo '<div class="alert alert-danger"><em>No records were found!.</em></div>';
        }
    }
    else
    {
        echo '<div class="alert alert-danger"><em>No records were found!!.</em></div>';
    }

        // Close connection
        mysqli_close($db_conn);
        ?>


    </div>
     <footer class="w3-container w3-theme bluecolor" style="padding:32px; text-align: center; color:white; text-decoration: none;font-size:180%;">
        <p>&copy; <a href="http://www.msec.edu.in/" title="W3.CSS" target="_blank" class="w3-hover-text-green" style="color:white; ">MSEC</a></p>
    </footer>
         
    </div>

    <script>
        // Open and close the sidebar on medium and small screens
        function w3_open() {
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("myOverlay").style.display = "none";
        }

        // Change style of top container on scroll
        window.onscroll = function() {myFunction()};
        function myFunction() {
          if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
            document.getElementById("myIntro").classList.add("w3-show-inline-block");
          } else {
            document.getElementById("myIntro").classList.remove("w3-show-inline-block");
            document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
          }
        }

        // Accordions
        function myAccordion(id) {
          var x = document.getElementById(id);
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme";
          } else { 
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className = 
            x.previousElementSibling.className.replace(" w3-theme", "");
          }
        }
         function ExportToExcel(type, fn, dl) {
       var elt = document.getElementById('customers');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ? XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }): XLSX.writeFile(wb, fn || ('MARK.' + (type || 'xlsx')));
    }
    </script>
         
</body>
</html> 
