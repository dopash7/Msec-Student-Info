<?php
include 'library/auth.php';

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

?>
<!DOCTYPE html>
<html>
<head>
  <title>MSEC CSE</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
  <link rel="icon" href="logo.jpg">
  <script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=albN07Msx0sc1_nW3Lcwmx-zxmQ05Dr2XxRPhoEqCSLnO04r9503LYmPgGueK88aOTyl7mRhJMP7LxVfLd7ITwapFvlikztyEezWdCy0WVfuAeb6Ko2GCyWB6RvKif8_cpclyMCnEx-eMWIvGQrgkR8x8QdumxstGCiIbFN1vcFUrVPeezJUtHrUvqwLinlbWFLW97lvpnGHYMnH05nvV4_L0wP4RSQGPkz-r8nu3uQM6W9eA6ea1pnj-mJTE4yP-rDCTOnVsM-HuEHEYAVjsmWXOL3b9WRO-B2oWp-pXLbzn5sBtApfR6-f4Pg9xUJKs_lc0tkK9RyQ4RiGfATKrXCf_2mSwoWZkLbcfgkMjB5uQ-al3DL9xW1whdTFxYny9W2pjcLX84IJvguuRu7EqnhdQdjT3rluFA8p_b0r7qzGVoYI4WMGbrrkDyMq_Wjoj6JyFu_Nv10rOEC3hFBz6s8cnaqp6WfJtZ3yixf84b0ZmQczX5V7QNnY5W2etGTQsnUeaDhzHKfGTBaq9GxWm8wuyTGhM72a43zvoFXgGodSjBvh_bJDVnNkd1GxA2_rrm2-kKti1_XlEPKsIi8b0suNoewoDkB2z4jAGudWe8QjKfawzvrZWVKG4O5_GT6uIRKzwG9eZWf-zZo40QN8Y4lk9zDvsEX5EqXH2f68XiyfS7GuvZJ7IwFlJv6Aeu4KliwsVLa0Oc-AiJ9wkWu99AQ7GUeqXNNjmsu08a_naPy5S_wlKh6fZK6oqVXctQElWoLDcM9dC3bNQQI4z-foTO7m1LxJ7LUGtcglWQ2CinnUwW8ATePP0M_fBwh1ov0TG2-a1M_mj0WFH3Kmwe7o04zjyQ7mJa3ejvMK2e08U9fyjBb3nneqYZvtDpm0CL4UeAgZcXfzuCj-Zx7trLVgXPUqs3yERjaJD3r80nZ5K5JZ78HFX52DaMQ2R6sXbE5gCbxOFIF3g9KBDid2KuTWIQpyiTLKfZZXVo5ZXuO1wNkt9T-gXZM2x9s7U2eDa0bAqkbld0J3lRaq3UY6VoWaCsOAaTSN1n_MA2u-Gxz24fVCOvcPwKK0KVEMfSEu5wn8Hs0QqYI6IzrgWujpabJY7nXNbXtPYNLW9iFYAIbruO9MZOo3nkPxGwIB4z_TRWIct5fYKvZO8jXnm69mrQtb5O_6hI1qh89PJ90KdPeKSUpx9Rvj_66xPdAJr1qPpwH-ncBKM-cb9UJDbInesBaKQw" nonce="c61ccc6c8f890e4bf9875cc9a9231dff" charset="UTF-8"></script><style>
  body, html {height: 100%;
   
  }
  body,h1,h2,h3,h4,h5,h6 {font-family: Palatino Linotype, sans-serif;}
  .menu {display: none}
  .bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url('https://www.collegesearch.in/upload/institute/images/large/131217035004_image31.jpg');

    min-height: 90%;
  }

  a div{
    font-size: 70%;

  }

  .hide{
    font-size: 30px;
  }

</style>
</head>
<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top w3-hide-small">
    <div class="w3-bar w3-xlarge   w3-hover-opacity-off" style="background-color: rgba(0, 0, 51); color:white;" id="myNavbar">
      <a href="#" class="w3-bar-item w3-button">HOME</a>
      <a href="#menu" class="w3-bar-item w3-button">PORTAL</a>
      <a href="#about" class="w3-bar-item w3-button">CONTACT</a>
      <a href="logout.php" class="w3-bar-item w3-button">LOGOUT</a>
      
    </div>
  </div>
  
  <!-- Header with image -->
  <header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-padding">
      <span class="w3-tag w3-xlarge"></span>
    </div>
    <div class="w3-display-middle w3-center" style="background-color: rgba(0, 0, 51, 0.8); width:60%;">
      <img src="logo.jpg">&emsp;
      <span class="w3-text-white w3-hide-small" style="font-size:30px; ">MEENAKSHI SUNDARARAJAN ENGINEERING COLLEGE <br>COMUPTER SCIENCE ENGINEERING</span>
      <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px;;"><b>MSEC<br>CSE</b></span>
      <br><br> <p style="font-size:20px;"><a href="#menu" class="w3-button w3-xxlarge w3-yellow" >STAFF PORTAL</a></p>
    </div>
  </header>

  <!-- Menu Container -->
  <div class="w3-container  w3-padding-64 w3-xxlarge" style="background-color: #000015; "  id="menu">
    <div class="w3-content">
      
      <h1 class="w3-center w3-jumbo" style="margin-bottom:64px; color:white;">PORTAL</h1>
      <div class="w3-row w3-center w3-border ">
        <a href="javascript:void(0)" onclick="openMenu(event, 'batch1');" id="myLink">
          <div class="w3-col s3 tablink w3-padding-large w3-hover-red" style="background-color:#D9ED92;">BATCH <br>2017-2021</div>
        </a>
        <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
          <div class="w3-col s3 tablink w3-padding-large w3-hover-red" style="background-color:#D9ED92;">BATCH<br> 2018-2022</div>
        </a>
        <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
          <div class="w3-col s3 tablink w3-padding-large w3-hover-red" style="background-color:#D9ED92;">BATCH<br> 2019-2023</div>
        </a>

        <a href="javascript:void(0)" onclick="openMenu(event, 'batch');">
          <div class="w3-col s3 tablink w3-padding-large w3-hover-red" style=" background-color:#D9ED92;" >BATCH <br>2020-2024</div>
        </a>
      </div>

      <div id="batch1" class="w3-container menu w3-padding-32 w3-white">
        <h1><b>FIRST YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none; font-size:20px;" href="">NAME LIST</a></span></h1>

        <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch1sem1&batch=batch1" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 1</a> &emsp; 
          <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch1sem2&batch=batch1" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 2</a></p>
          <hr>
          
          <h1><b>SECOND YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none;font-size:20px;" href="">NAME LIST</a></span></h1>

          <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch1sem3&batch=batch1" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 3</a> &emsp; 
            <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch1sem4&batch=batch1" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 4</a></p>
            <hr>

            <h1><b>THIRD YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none;font-size:20px;" href="">NAME LIST</a></span></h1>

            <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch1sem5&batch=batch1" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 5</a> &emsp; 
              <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch1sem6&batch=batch1" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 6</a></p>
              <hr>

              <h1><b>FOURTH YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none;font-size:20px;" href="">NAME LIST</a></span></h1>

              <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch1sem7&batch=batch1" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 7</a> &emsp; 
                <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch1sem8&batch=batch1" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 8</a></p>
                <hr>

                
              </div>

              <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
                <h1><b>FIRST YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none; font-size:20px;" href="">NAME LIST</a></span></h1>

                <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch2sem1&batch=batch2" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 1</a> &emsp; 
                  <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch2sem2&batch=batch1" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 2</a></p>
                  <hr>
                  
                  <h1><b>SECOND YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none;font-size:20px;" href="">NAME LIST</a></span></h1>

                  <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch2sem3&batch=batch2" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 3</a> &emsp; 
                    <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch2sem4&batch=batch2" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 4</a></p>
                    <hr>

                    <h1><b>THIRD YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none;font-size:20px;" href="">NAME LIST</a></span></h1>

                    <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch2sem5&batch=batch2" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 5</a> &emsp; 
                      <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch2sem6&batch=batch1" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 6</a></p>
                      <hr>

                      <h1><b>FOURTH YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none;font-size:20px;" href="">NAME LIST</a></span></h1>

                      <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch2sem7&batch=batch2" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 7</a> &emsp; 
                        <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch2sem8&batch=batch1" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 8</a></p>
                        <hr>
                      </div>


                      <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
                       <h1><b>FIRST YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none; font-size:20px;" href="">NAME LIST</a></span></h1>

                       <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch3sem1&batch=batch3" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 1</a> &emsp; 
                        <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch3sem2&batch=batch3" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 2</a></p>
                        <hr>
                        
                        <h1><b>SECOND YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none;font-size:20px;" href="">NAME LIST</a></span></h1>

                        <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch3sem3&batch=batch3" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 3</a> &emsp; 
                          <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch3sem4&batch=batch3" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 4</a></p>
                          <hr>

                          <h1><b>THIRD YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none;font-size:20px;" href="">NAME LIST</a></span></h1>

                          <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch3sem5&batch=batch3" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 5</a> &emsp; 
                            <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch3sem6&batch=batch3" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 6</a></p>
                            <hr>

                            <h1><b>FOURTH YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none;font-size:20px;" href="">NAME LIST</a></span></h1>

                            <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch3sem7&batch=batch3" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 7</a> &emsp; 
                              <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch3sem8&batch=batch3" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 8</a></p>
                              <hr>
                            </div>


                            <div id="batch" class="w3-container menu w3-padding-32 w3-white">
                             <h1><b>FIRST YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none; font-size:20px;" href="">NAME LIST</a></span></h1>

                             <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch4sem1&batch=batch4" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 1</a> &emsp; 
                              <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch4sem2&batch=batch4" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 2</a></p>
                              <hr>
                              
                              <h1><b>SECOND YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none;font-size:20px;" href="">NAME LIST</a></span></h1>

                              <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch4sem3&batch=batch4" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 3</a> &emsp; 
                                <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch4sem4&batch=batch4" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 4</a></p>
                                <hr>

                                <h1><b>THIRD YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none;font-size:20px;" href="">NAME LIST</a></span></h1>

                                <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch4sem5&batch=batch4" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 5</a> &emsp; 
                                  <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch4sem6&batch=batch4" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 6</a></p>
                                  <hr>

                                  <h1><b>FOURTH YEAR</b> <span class="w3-right w3-tag w3-green w3-round"><a style="text-decoration: none;font-size:20px;" href="">NAME LIST</a></span></h1>

                                  <p ><a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch4sem7&batch=batch4" style="text-decoration: none; font-size: 70%; font-family: Herculanum;">SEMESTER 7</a> &emsp; 
                                    <a class="w3-button w3-large w3-blue" style="" href="semester.php?name=batch4sem8&batch=batch4" style="text-decoration: none; font-size: 50%; font-family: Herculanum;">SEMESTER 8</a></p>
                                    <hr>
                                  </div>


                                  <br>

                                </div>
                              </div><br><br><br>


                              <!-- About Container -->

                              <div class="w3-container w3-padding-64 w3-white w3-grayscale w3-xlarge" id="about">

                                <div class="w3-content w3-hide-small w3-hide-medium">
                                 
                                 <div class="w3-display-middle w3-container w3-xlarge">
                                   <button onclick="document.getElementById('INSTITUTE').style.display='block'" class="w3-button w3-blue">INSTITUTE</button>
                                   <button onclick="document.getElementById('DEPARTMENT').style.display='block'" class="w3-button w3-blue">DEPARTMENT</button><br><br>
                                   <button style="margin-left: 10%;" onclick="document.getElementById('PEO').style.display='block'" class="w3-button w3-blue">PEO's</button>
                                   <button onclick="document.getElementById('PO').style.display='block'" class="w3-button w3-blue">PO's</button>
                                   <button  onclick="document.getElementById('PSO').style.display='block'" class="w3-button w3-blue">PSO's</button><br><br><br>
                                 </div>




                               </div>
                               <div class="w3-content w3-hide-large ">
                                 
                                 <div >
                                   <button class="hide" onclick="document.getElementById('INSTITUTE').style.display='block'" class="w3-button w3-blue">INSTITUTE</button>
                                   <button class="hide" onclick="document.getElementById('DEPARTMENT').style.display='block'" class="w3-button w3-blue">DEPARTMENT</button>
                                   <button class="hide" style="margin-left: 10%;" onclick="document.getElementById('PEO').style.display='block'" class="w3-button w3-blue">PEO's</button>
                                   <button class="hide" onclick="document.getElementById('PO').style.display='block'" class="w3-button w3-blue">PO's</button>
                                   <button  class="hide" onclick="document.getElementById('PSO').style.display='block'" class="w3-button w3-blue">PSO's</button>
                                 </div>




                               </div>
                             </div>

                             <h1 class="w3-center w3-jumbo" style="text-align:center; ">CONTACT</h1>
                             <div style="background-color: #000015; color: white; width: 30%; text-align:center; margin-left:35%;"><h2>ADDRESS</h2>
                              <p>363, Arcot Road,</p>
                              <p>Kodambakkam, Chennai,</p>
                              <p>Tamil Nadu 600024</p>
                              <p><b>PHONE NUMBER: </b> 044 2480 1636</p></div>
                              <div id="INSTITUTE" class="w3-modal">
                                <div class="w3-modal-content w3-animate-zoom">
                                  <div class="w3-container w3-black w3-display-container">
                                    <span onclick="document.getElementById('INSTITUTE').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                                    <h1 style="text-align: center;">VISION AND MISSION OF INSTITUTE</h1>
                                  </div>
                                  
                                  <div class="w3-container w3-black">
                                    <h1 style="text-align: center;">VISION</h1>
                                  </div><br>
                                  <div class="w3-container">
                                   To impart state-of-the art technical education, including sterling values and shining character, producing engineers who contribute to nation building thereby achieving our ultimate objective of sustained development of an unparalleled society, nation and world at large.
                                 </div><br>
                                 <div class="w3-container w3-black">
                                  <h1 style="text-align: center;">MISSION</h1>
                                </div><br>
                                <div class="w3-container">
                                  Meenakshi Sundararajan Engineering College, Chennai constantly strives to be a Centre of Excellence with the singular aim of producing students of outstanding academic excellence and sterling character to benefit the society, our nation and the world at large.<br>
                                  To achieve this, the college ensures
                                  <ul>
                                    <li>Continuous upgradation of its teaching faculty to ensure a high standard of quality education and to meet the ever-changing needs of the society.</li>
                                    <li>Constant interaction with its stakeholders.</li>
                                    <li>Linkage with other educational institutions and industries at the national and international level for mutual benefit.</li>
                                    <li>Provision of research facilities and infrastructure in line with global trends.
                                    </li>
                                    <li>Adequate opportunities and exposure to the students through suitable programs,  to mould their character and to develop their personality with an emphasis on professional ethics and moral values</li>
                                  </ul>
                                </div>
                              </div>
                            </div>


                            <div id="DEPARTMENT" class="w3-modal">
                              <div class="w3-modal-content w3-animate-zoom">
                                <div class="w3-container w3-black">
                                  <span onclick="document.getElementById('DEPARTMENT').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                                  <h1 style="text-align: center;">VISION AND MISSION OF DEPARTMENT</h1>
                                </div>
                                <div class="w3-container w3-black">
                                  <h1 style="text-align: center;">VISION</h1>
                                </div><br>
                                <div class="w3-container">
                                 To achieve academic excellence in Computer Science and Engineering by imparting quality training, encouraging research activities and innovation, inculcating ethical values and preparing the students to face industrial demands, societal needs and technical challenges. 
                               </div><br>
                               <div class="w3-container w3-black">
                                <h1 style="text-align: center;">MISSION</h1>
                              </div>
                              <div class="w3-container">
                               
                                <ul>
                                  <li>To provide quality education in theory and application of Computer Science and Engineering.</li>
                                  <li>To inculcate analytical thinking and innovation within students to become technically  competent professionals.</li>
                                  <li>To prepare students to excel in competitive and challenging careers.</li>
                                  <li>To generate socially responsible citizens with ethical values for facing industrial and societal challenges.
                                  </li>
                                  <li>To promote research in the emerging areas of technology convergence.
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>


                          <div id="PEO" class="w3-modal">
                            <div class="w3-modal-content w3-animate-zoom">
                              <div class="w3-container w3-black">
                                <span onclick="document.getElementById('PEO').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                                <h1 style="text-align: center;">PROGRAM EDUCATIONAL OBJECTIVES</h1>
                              </div>
                              
                              <div class="w3-container w3-black">
                                
                              </div>
                              <div class="w3-container">
                               
                                <ul>
                                  <li>Prepare the graduates for a successful career in industry and motivate them for higher education and research.
                                  </li>
                                  <li>Provide graduates with a firm foundation in the principles and practices of computer science and engineering including mathematics, physical sciences, and basic engineering.</li>
                                  <li>Impart application skills to cover broad range of industrial demands.
                                  </li>
                                  <li>Prepare graduates with ethical values, leadership qualities and entrepreneur skills to contribute to their profession and society.

                                  </li>
                                  <li>Train graduates to be able to use new techniques and skills for professional excellence.
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>




                          <div id="PO" class="w3-modal">
                            <div class="w3-modal-content w3-animate-zoom">
                              <div class="w3-container w3-black">
                                <span onclick="document.getElementById('PO').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                                <h1 style="text-align: center;">PROGRAM OUTCOMES</h1>
                              </div>
                              <div class="w3-container w3-black">
                                <h1 style="text-align: center; text-transform: uppercase;">1. Engineering knowledge</h1>
                              </div><br>
                              <div class="w3-container">
                               Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.  
                             </div><br>
                             <div class="w3-container w3-black">
                              <h1 style="text-align: center; text-transform: uppercase;">2. Problem analysis</h1>
                            </div><br>
                            <div class="w3-container">
                             Identify, formulate, research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.
                             
                           </div><br>

                           <div class="w3-container w3-black">
                            <h1 style="text-align: center; text-transform: uppercase;">3. Design/development of solutions</h1>
                          </div><br>
                          <div class="w3-container">
                           Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations. 
                         </div><br>

                         <div class="w3-container w3-black">
                          <h1 style="text-align: center; text-transform: uppercase;">4. Conduct investigations of complex problems</h1>
                        </div><br>
                        <div class="w3-container">
                         Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.
                       </div><br>

                       <div class="w3-container w3-black">
                        <h1 style="text-align: center; text-transform: uppercase;">5. Modern tool usage</h1>
                      </div><br>
                      <div class="w3-container">
                       Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.
                     </div><br>

                     <div class="w3-container w3-black">
                      <h1 style="text-align: center; text-transform: uppercase;">6. The engineer and society</h1>
                    </div><br>
                    <div class="w3-container">
                     Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.
                   </div><br>

                   <div class="w3-container w3-black">
                    <h1 style="text-align: center; text-transform: uppercase;">7. Environment and sustainability</h1>
                  </div><br>
                  <div class="w3-container">
                   Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development. 

                 </div><br>

                 <div class="w3-container w3-black">
                  <h1 style="text-align: center; text-transform: uppercase;">8. Ethics</h1>
                </div><br>
                <div class="w3-container">
                 Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.
               </div><br>

               <div class="w3-container w3-black">
                <h1 style="text-align: center; text-transform: uppercase;">9. Individual and team work</h1>
              </div><br>
              <div class="w3-container">
               Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings. 

             </div><br>

             <div class="w3-container w3-black">
              <h1 style="text-align: center; text-transform: uppercase;">10. Communication</h1>
            </div><br>
            <div class="w3-container">
             Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions. 

           </div><br>

           <div class="w3-container w3-black">
            <h1 style="text-align: center; text-transform: uppercase;">11. Project management and finance</h1>
          </div><br>
          <div class="w3-container">
           Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments. 
         </div><br>

         <div class="w3-container w3-black">
          <h1 style="text-align: center; text-transform: uppercase;">12. Life-long learning</h1>
        </div><br>
        <div class="w3-container">
         Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change. 

       </div><br>
     </div>
   </div>



   <div id="PSO" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
      <div class="w3-container w3-black">
        <span onclick="document.getElementById('PSO').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
        <h1 style="text-align: center;">PROGRAM SPECIFIC OUTCOMES</h1>
      </div>
      
      <div class="w3-container w3-black">
        
      </div>
      <div class="w3-container">
       
        <ul>
          <li>Ability to identify, analyse, design and implement computer based system of varying complexities.
          </li>
          <li>To apply hardware/software methods, open ended programming environments and available tools in emerging technologies for solving real-life and R&D problems</li>
          <li>Employing engineering solution for ground-breaking career paths, to become leading entrepreneur and develop interest for further studies
          </li>
          
        </ul>
      </div>
    </div>
  </div>



  <!-- Footer -->
  <footer class="w3-center  w3-padding-48 w3-xxlarge" style="background-color:#000015; color: white;">
    <p>&copy; <a href="http://www.msec.edu.in/" title="W3.CSS" target="_blank" class="w3-hover-text-green">MSEC</a></p>
  </footer>

  <script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
   x[i].style.display = "none";
 }
 tablinks = document.getElementsByClassName("tablink");
 for (i = 0; i < x.length; i++) {
   tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
 }
 document.getElementById(menuName).style.display = "block";
 evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
