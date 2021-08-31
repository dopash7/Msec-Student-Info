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


$sem=preg_split("/[\d]/", $_GET['name'], 2);
$count=1;
$subjects=array(array("Communicative English","Engineering Mathematics-I","Engineering Physics","Engineering Chemistry","Problem Solving and Python Programming","Engineering Graphics","PSPP Lab","P&C Lab"),array("Technical English","Engineering Mathematics-II","Physics for Information Science","Basic Electrical,Electronics and Measurement Engineering","Environmental Science and Engineering","Programming in C","EPs Lab","CP Lab"),array("Discrete Mathematics","Digital Principles and Design","Data Structures","Object Oriented Programming","Communication Engineering","DS Lab","OOP Lab","DS Lab","Interpersonal Skills/Listening & Speaking"),array("Probability and Queuing Theory","Computer Architecture","Database Management Systems","Design and Analysis of Algorithms","Operating Systems","Software Engineering","DBMS Lab","OS Lab","Advance Reading and Writing"),array("Algebra and Number Theory","Computer Networks","Microprocessors and Microcontrollers","Theory of Computation","Object Oriented Analysis and Design","Open Elective I","MPMC Lab","OOAD Lab","CN Lab"),array("Internet Programming","Artificial Intelligence","Mobile Computing","Complier Design","Distributed Systems","Professional Elective I","IP lab","MAD Lab","Mini Project"),array("Principles of Management","Cryptography and Network Security","Cloud Computing","Open Elective II","Professional Elective II","Professional Elective III","CC Lab","Security Lab"),array("Professional Elective IV","Professional Elective V","Project Work"));

?>
<!DOCTYPE html>
<html>
<head>
    <title>INDIVIDUAL | MSEC</title>
    <link rel="icon" href="logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
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

.grid-container {
  display: grid;
  grid: 300px / auto auto;
  grid-gap: 50px;
  padding: 10px;
}


</style>
</head>
<body>

    <nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card bluecolor topnav" style="z-index:3;width:250px;" id="mySidebar">
        <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="home.php"><p style="width:80%; font-size: 150%; text-align: center; text-shadow: 1px 1px 3px #000000">MSEC CSE</p> </a>
        <a class="w3-bar-item w3-leftbar w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>


        <a class="w3-bar-item w3-button " href="semester.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch'] ;?>"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Students</a>
        <a class="w3-bar-item w3-button" href="personaldetails.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch'] ;?>"><i class='far fa-folder-open' ></i> Personal Details</a>
        <a class="w3-bar-item w3-button" href="mark.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class='far fa-edit'></i> Marks</a>
        <a class="w3-bar-item w3-button" href="aep.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class='fas fa-book-reader'></i> AEP</a>
        <a class="w3-bar-item w3-button" href="weak.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class='fas fa-chalkboard-teacher'></i> Weak</a>
        <a class="w3-bar-item w3-button " href="attendance.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class='far fa-calendar-check'></i> Attendance</a>
        <a class="w3-bar-item w3-button" href="ecube.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class='fas fa-users'></i> E-Cube</a>
        <a class="w3-bar-item w3-button" href="intern.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class="fa fa-laptop" aria-hidden="true"></i> Intern</a>
        <a class="w3-bar-item w3-button" href="iv.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class='fas fa-map-marked-alt'></i> Industrial Visit</a>
        <a class="w3-bar-item w3-button active" href="summary.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>"><i class='fas fa-user-graduate'></i> Indvidual Summary</a>
    </nav>


    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

    <div class="w3-main" style="margin-left:250px;">

        <div id="myTop" class="w3-container w3-top w3-theme w3-large bluecolor">
            <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge " onclick="w3_open()"></i>
                <?php
                if($sem[1]=='sem1')
                {
                    echo'<span id="myIntro" class="w3-hide" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 1</span>';
                }
                else if($sem[1]=='sem2')
                {
                    echo'<span id="myIntro" class="w3-hide" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;margin-top:20px;">Semester 2</span>';
                }
                else if($sem[1]=='sem3')
                {
                    echo'<span id="myIntro" class="w3-hide" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 3</span>';
                }
                else if($sem[1]=='sem4')
                {
                    echo'<span id="myIntro" class="w3-hide" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 4</span>';
                }
                else if($sem[1]=='sem5')
                {
                    echo'<span id="myIntro" class="w3-hide" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 5</span>';
                }
                else if($sem[1]=='sem6')
                {
                    echo'<span id="myIntro" class="w3-hide" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 6</span>';
                }
                else if($sem[1]=='sem7')
                {
                    echo'<span id="myIntro" class="w3-hide" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 7</span>';
                }
                else if($sem[1]=='sem8')
                {
                    echo'<span id="myIntro" class="w3-hide" style="font-weight: bold;letter-spacing: 1px;text-shadow: 1px 1px 3px #000000;">Semester 8</span>';
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

    <div class="w3-container" style="padding:32px">

       <H3 class="w3-xxxlarge" style="font-size: 40px!important;font-weight: bold;">INDIVIDUAL INFO:</H3>
       <a href="add.php?name=<?php echo$_GET['name']; ?>&batch=<?php echo$_GET['batch']; ?>" class="btn btn-success pull-left" style="background-color: #76C893; border-color: #76C893; color: black;"><i class="fa fa-plus"></i><b>  ADD</b></a> &nbsp; &nbsp;
        

       <?php
        // Include config file
       if(isset($_GET['id']))
       {
        echo'<a href="update.php?id='.$_GET['rollno'].'&name='.$_GET[\'name'].'&batch='.$_GET['batch'].' class="btn btn-success pull-left" style="margin-left: 10px;background-color: #76C893; border-color: #76C893; color: black;"><i class="fa fa-pencil"></i><b>  EDIT</b></a>
       <br><br><br>';
       $db_conn=get_db_connection();
        // Attempt select query execution

       $sql = "SELECT * FROM ".$_GET['name']." LEFT JOIN ".$_GET['batch']." ON ".$_GET['name'].".rollno=".$_GET['batch'].".rollno WHERE ".$_GET['name'].".rollno=".$_GET['id'].";";
       if($result = mysqli_query($db_conn, $sql))
       {
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
           echo'
           <div class="col-md col-lg">
           
           <div class="row g-3">
           <div class="col-sm-6">
           <STRONG>Name: </STRONG>'.$row['name'].'
           </div>

           <div class="col-sm-6">
           <STRONG>Roll Number: </STRONG>'.$row['rollno'].'

           </div>

           <H4 class="w3-xxxlarge" style="font-size: 30px!important;font-weight: bold;">PERSONAL DETAILS:</H4>

           <div class="col-sm-6">
           <STRONG>Father Name: </STRONG>'.$row['fathername'].'
           </div>

           <div class="col-sm-6">
           <STRONG>Mother Name: </STRONG>'. $row['mothername'] .'
           </div>

           <div class="col-sm-6">
           <STRONG>Date Of Birth: </STRONG>'. $row['dob'] .'

           </div>

           <div class="col-12">
           <STRONG>School Name: </STRONG>'. $row['schoolname'] .'

           </div>

           <div class="col-sm-6">
           <STRONG>SSLC: </STRONG>'. $row['sslc'] .'

           </div>

           <div class="col-sm-6">
           <STRONG>HSC: </STRONG>'. $row['hsc'] .'

           </div>

           <div class="col-12">
           <STRONG>ADDRESS: </STRONG>'. $row['address'] .'

           </div>

           <H4 class="w3-xxxlarge" style="font-size: 30px!important;font-weight: bold;">ACADEMIC DETAILS:</H4>
           ';
           if($sem[1]=='sem1')
           {
            echo '<div class="col-sm-3">
            <STRONG>'.$subjects[0][0]." </STRONG></div><div class=\"col-sm-3\">:  ". $row['comm_eng'] ."
            </div>";
            echo '<div class="col-sm-3">
            <STRONG>'.$subjects[0][1]." </STRONG></div><div class=\"col-sm-3\">:  ". $row['math'] ."
            </div>";
            echo '<div class="col-sm-3">
            <STRONG>'.$subjects[0][2]." </STRONG></div><div class=\"col-sm-3\">:  ". $row['eng_phy'] ."
            </div>";
            echo '<div class="col-sm-3">
            <STRONG>'.$subjects[0][3]." </STRONG></div><div class=\"col-sm-3\">:  ". $row['eng_che'] ."
            </div>";
            echo '<div class="col-sm-3">
            <STRONG>'.$subjects[0][4]." </STRONG></div><div class=\"col-sm-3\">:  ". $row['pspp'] ."
            </div>";
            echo '<div class="col-sm-3">
            <STRONG>'.$subjects[0][5]." </STRONG></div><div class=\"col-sm-3\">:  ". $row['eng_gra'] ."
            </div>";
            echo '<div class="col-sm-3">
            <STRONG>'.$subjects[0][6]." </STRONG></div><div class=\"col-sm-3\">:  ". $row['pspplab'] ."
            </div>";
            echo '<div class="col-sm-3">
            <STRONG>'.$subjects[0][7]." </STRONG></div><div class=\"col-sm-3\">:  ". $row['pclab'] ."
            </div>";
            echo '<div class="col-sm-3">
            <STRONG>GPA </STRONG></div><div class="col-sm-3">:  '. $row['gpa'] .'
            </div>';
            echo '<div class="col-sm-3">
            <STRONG>CGPA </STRONG></div><div class="col-sm-3">:  '. $row['cgpa'] .'
            </div>';
        }
        else if($sem[1]=='sem2')
        {
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[1][0]." </STRONG></div><div class=\"col-sm-3\">: ". $row['tech_eng'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[1][1]." </STRONG></div><div class=\"col-sm-3\">: ". $row['math'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[1][2]." </STRONG></div><div class=\"col-sm-3\">: ". $row['phy_is'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[1][3]." </STRONG></div><div class=\"col-sm-3\">: ". $row['beeme'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[1][4]." </STRONG></div><div class=\"col-sm-3\">: ". $row['evs'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[1][5]." </STRONG></div><div class=\"col-sm-3\">: ". $row['p_in_c'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[1][6]." </STRONG></div><div class=\"col-sm-3\">: ". $row['eplab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[1][7]." </STRONG></div><div class=\"col-sm-3\">: ". $row['clab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>GPA </STRONG></div><div class="col-sm-3">: '. $row['gpa'] .'
            </div>';
            echo '<div class="col-sm-6">
            <STRONG>CGPA </STRONG></div><div class="col-sm-3">: '. $row['cgpa'] .'
            </div>';
        }
        else if($sem[1]=='sem3')
        {
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[2][0]." </STRONG></div><div class=\"col-sm-3\">: ". $row['disc_math'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[2][1]." </STRONG></div><div class=\"col-sm-3\">: ". $row['dpsd'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[2][2]." </STRONG></div><div class=\"col-sm-3\">: ". $row['ds'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[2][3]." </STRONG></div><div class=\"col-sm-3\">: ". $row['oops'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[2][4]." </STRONG></div><div class=\"col-sm-3\">: ". $row['ce'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[2][5]." </STRONG></div><div class=\"col-sm-3\">: ". $row['dslab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[2][6]." </STRONG></div><div class=\"col-sm-3\">: ". $row['oopslab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[2][7]." </STRONG></div><div class=\"col-sm-3\">: ". $row['dpsdlab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[2][8]." </STRONG></div><div class=\"col-sm-3\">: ". $row['isllab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>GPA </STRONG></div><div class="col-sm-3">: '. $row['gpa'] .'
            </div>';
            echo '<div class="col-sm-6">
            <STRONG>CGPA </STRONG></div><div class="col-sm-3">: '. $row['cgpa'] .'
            </div>';
        }
        else if($sem[1]=='sem4')
        {
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[3][0]." </STRONG></div><div class=\"col-sm-3\">: ". $row['pqt'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[3][1]." </STRONG></div><div class=\"col-sm-3\">: ". $row['ca'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[3][2]." </STRONG></div><div class=\"col-sm-3\">: ". $row['dbms'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[3][3]." </STRONG></div><div class=\"col-sm-3\">: ". $row['daa'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[3][4]." </STRONG></div><div class=\"col-sm-3\">: ". $row['os'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[3][5]." </STRONG></div><div class=\"col-sm-3\">: ". $row['se'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[3][6]." </STRONG></div><div class=\"col-sm-3\">: ". $row['dbmslab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[3][7]." </STRONG></div><div class=\"col-sm-3\">: ". $row['oslab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[3][8]." </STRONG></div><div class=\"col-sm-3\">: ". $row['awa'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>GPA </STRONG></div><div class="col-sm-3">: '. $row['gpa'] .'
            </div>';
            echo '<div class="col-sm-6">
            <STRONG>CGPA </STRONG></div><div class="col-sm-3">: '. $row['cgpa'] .'
            </div>';
        }
        else if($sem[1]=='sem5')
        {
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[4][0]." </STRONG></div><div class=\"col-sm-3\">: ". $row['ant'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[4][1]." </STRONG></div><div class=\"col-sm-3\">: ". $row['cn'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[4][2]." </STRONG></div><div class=\"col-sm-3\">: ". $row['mpmc'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[4][3]." </STRONG></div><div class=\"col-sm-3\">: ". $row['toc'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[4][4]." </STRONG></div><div class=\"col-sm-3\">: ". $row['ooad'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[4][5]." </STRONG></div><div class=\"col-sm-3\">: ". $row['oe1'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[4][6]." </STRONG></div><div class=\"col-sm-3\">: ". $row['mpmclab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[4][7]." </STRONG></div><div class=\"col-sm-3\">: ". $row['ooadlab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[4][8]." </STRONG></div><div class=\"col-sm-3\">: ". $row['cnlab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>GPA </STRONG></div><div class="col-sm-3">: '. $row['gpa'] .'
            </div>';
            echo '<div class="col-sm-6">
            <STRONG>CGPA </STRONG></div><div class="col-sm-3">: '. $row['cgpa'] .'
            </div>';
        }
        else if($sem[1]=='sem6')
        {
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[5][0]." </STRONG></div><div class=\"col-sm-3\">: ". $row['ip'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[5][1]." </STRONG></div><div class=\"col-sm-3\">: ". $row['ai'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[5][2]." </STRONG></div><div class=\"col-sm-3\">: ". $row['mc'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[5][3]." </STRONG></div><div class=\"col-sm-3\">: ". $row['cd'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[5][4]." </STRONG></div><div class=\"col-sm-3\">: ". $row['ds'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[5][5]." </STRONG></div><div class=\"col-sm-3\">: ". $row['pe1'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[5][6]." </STRONG></div><div class=\"col-sm-3\">: ". $row['iplab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[5][7]." </STRONG></div><div class=\"col-sm-3\">: ". $row['madlab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[5][8]." </STRONG></div><div class=\"col-sm-3\">: ". $row['minipr'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>GPA </STRONG></div><div class="col-sm-3">: '. $row['gpa'] .'
            </div>';
            echo '<div class="col-sm-6">
            <STRONG>CGPA </STRONG></div><div class="col-sm-3">: '. $row['cgpa'] .'
            </div>';
        }
        else if($sem[1]=='sem7')
        {
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[6][0]." </STRONG></div><div class=\"col-sm-3\">: ". $row['pom'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[6][1]." </STRONG></div><div class=\"col-sm-3\">: ". $row['cns'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[6][2]." </STRONG></div><div class=\"col-sm-3\">: ". $row['cc'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[6][3]." </STRONG></div><div class=\"col-sm-3\">: ". $row['oe2'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[6][4]." </STRONG></div><div class=\"col-sm-3\">: ". $row['pe2'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[6][5]." </STRONG></div><div class=\"col-sm-3\">: ". $row['pe3'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[6][6]." </STRONG></div><div class=\"col-sm-3\">: ". $row['cclab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[6][7]." </STRONG></div><div class=\"col-sm-3\">: ". $row['seclab'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>GPA </STRONG></div><div class="col-sm-3">: '. $row['gpa'] .'
            </div>';
            echo '<div class="col-sm-6">
            <STRONG>CGPA </STRONG></div><div class="col-sm-3">: '. $row['cgpa'] .'
            </div>';
        }
        else if($sem[1]=='sem8')
        {
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[7][0]." </STRONG></div><div class=\"col-sm-3\">: ". $row['pe4'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[7][1]." </STRONG></div><div class=\"col-sm-3\">: ". $row['pe5'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>'.$subjects[7][2]." </STRONG></div><div class=\"col-sm-3\">: ". $row['project'] ."
            </div>";
            echo '<div class="col-sm-6">
            <STRONG>GPA </STRONG></div><div class="col-sm-3">: '. $row['gpa'] .'
            </div>';
            echo '<div class="col-sm-6">
            <STRONG>CGPA </STRONG></div><div class="col-sm-3">: '. $row['cgpa'] .'
            </div>';
        }

        echo'<H5 class="w3-xxxlarge" style="font-size: 30px!important;font-weight: bold;">ATTENDANCE:</H5>
        <div class="col-sm-6">
        <STRONG>Attendance:  </STRONG>'. $row['attendance'] .'

        </div>
        <H5 class="w3-xxxlarge" style="font-size: 30px!important;font-weight: bold;">INTERN DETAILS:</H5>
        <div class="col-sm-6">
        <STRONG>Office Name:  </STRONG>'. $row['office_name'] .'

        </div>

        <div class="col-sm-6">
        <STRONG>Domain: </STRONG>'. $row['domain'] .'

        </div>

        <div class="col-sm-4">
        <STRONG>Duration: </STRONG>'. $row['duration_intern'] .'

        </div>
        <div class="col-sm-4">
        <STRONG>Start Date: </STRONG>'. $row['start_intern'] .'

        </div>
        <div class="col-sm-4">
        <STRONG>End Date: </STRONG>'. $row['end_intern'] .'

        </div><BR>

        <H5 class="w3-xxxlarge" style="font-size: 30px!important;font-weight: bold;">E-CUBE:</H5>

        <div class="col-12">
        <STRONG>Topic: </STRONG>'. $row['ecube_topic'] .'
        </DIV>
        <BR>

        <H5 class="w3-xxxlarge" style="font-size: 30px!important;font-weight: bold;">INDUSTRIAL VISIT:</H5>

        <div class="col-sm-6">
        <STRONG>Company Name: </STRONG>'. $row['company_name'] .'

        </div>

        <div class="col-sm-6">
        <STRONG>Visit Date: </STRONG>'. $row['visit_date'] .'

        </div>

        <div class="col-12">
        <STRONG>Summary: </STRONG>'. $row['summary_iv'] .'

        </div>

        </div>

        </div>';
        

                // Free result set
        mysqli_free_result($result);
    } 
    else{
        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
    }
} else{
    echo '<div class="alert alert-danger"><em>No records were found!.</em></div>';
}

        // Close connection
mysqli_close($db_conn);
}
else{
     $db_conn=get_db_connection();
    // Attempt select query execution
               $sql = "SELECT * FROM msec.".$_GET['batch'] ;
               if($result = mysqli_query($db_conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    echo'<H3>Click any inviduals name to see their Complete Details</h3><br>';
                    echo '<table  class="table table-bordered table-striped" id="customers">';
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>S.NO.</th>";
                    echo "<th>NAME</th>";
                    echo "<th>REGISTER NUMBER</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>" . $count. "</td>";
                        echo "<td><a href=\"summary.php?name=".$_GET['name']."&batch=".$_GET['batch']."&id=".$row['rollno']."\">". $row['name'] . "</a></td>";
                        echo "<td>" . $row['rollno'] . "</td>";
                        echo "</tr>";
                        $count=$count+1;
                    }
                    echo "</tbody>";                            
                    echo "</table>";
            // Free result set
                    mysqli_free_result($result);
                } else{
                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                }
            } else{
                echo '<div class="alert alert-danger"><em>No records were found!.</em></div>';
            }

    // Close connection
            mysqli_close($db_conn);
}
?>


</div>

<br>
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
</script>

</body>
</html> 
