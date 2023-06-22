<?php
 session_start();
   
  //verify users 
  if(empty($_SESSION['loginId'])){
      //redirect user backto login interface 
      header('location:../../index.php');
  }

 //include navBar.php
 include_once('../../layout/navBar.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Admin Panel</title>

    <!-- Link bootstrap css -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    

</head>
<body >
    
        
<div class="container">
<div class="row">

            <div class="col-md-6" id="loadView">
            <div class="row">
              

                              <div class="card text-dark bg-light mt-5"  >
                    <div class="card-body">
                      <h5 class="card-title" ><b>Register Students</b></h5>
                      <p class="card-text">Register with the system.</p>
                      <a href="#" class="btn btn-outline-primary" id="addStu">Register</a>
                    </div>
                  </div>

                  <div class="card text-dark bg-light mt-5" >
                    <div class="card-body">
                      <h5 class="card-title"><b>Generate QR code</b></h5>
                      <p class="card-text">Create your QR code .</p>
    
                      <a href="#" class="btn btn-outline-primary" id="qrStu" name="sub">Generate QR Code</a>
                      
                      
                    </div>
                  </div>


                
                  <div class="card text-dark bg-light mt-5" >
                    <div class="card-body">
                      <h5 class="card-title" ><b>Attendance Mark</b></h5>
                      <p class="card-text">Mark your attendance.</p>
                      <a href="../../attendance.php" class="btn btn-outline-primary" id="markStu">Mark</a>
                     
                    </div>
                  </div>


               
                  <div class="card text-dark bg-light mt-5" >
                    <div class="card-body">
                      <h5 class="card-title" ><b>View Student Details</b></h5>
                      <p class="card-text">View students details.</p>
                      <a href="#" class="btn btn-outline-primary" id="viewStu">View</a>
                    </div>
                  </div> 

                  
                  <div class="card text-dark bg-light mt-5" >
                    <div class="card-body">
                      <h5 class="card-title" ><b>View Student Attendance Details</b></h5>
                      <p class="card-text">View students attendance details.</p>
                      <a href="#" class="btn btn-outline-primary" id="atStu">View Attendance</a>
                    </div>
                  </div> 

               




</div> 
            </div>


       
            <div class="col-md-6">

                      <marquee  behavior="scroll" direction="left" scrollamount="12"><h1 style="text-align:center;color:#10598D;font-size:40px;font-family:Goudy Stout;margin-top:20px;">Study Hard.<h1><br>
                      <h1 style="text-align:right;color:#10598D;font-size:40px;font-family:Goudy Stout;"> Be Successful...</h1>
                      <img src="../../images/kids-2.gif"width="900" height="700"></marquee>
                      
            </div>

           
</div>
<br><br><br>

<img src="../../images/WhatsApp_Image_2022-02-18_at_21.15.34-removebg-preview.png" width="50" height="50" style="align:left;">        <br> 
International Technical Institute &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="../../images/9f4c74fb-f175-4643-b3ea-67bfd705c087-removebg-preview.png" width="45px" height="35px"><b>Contact Info - </b>+94 712424000 &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="../../images/f5023460-6ea7-422c-9a4f-f2bfbc2b69ee-removebg-preview.png" width="30px" height="30px">&emsp;<b>Email Address - </b>itinstitute@gmail.com <br>
Sri Lanka &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;+94 713434000   &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;    <img src="../../images/2341517-removebg-preview.png" width="30px" height="30px">&emsp;Pallekale,Kandy,Sri Lanka<br>
<img src="../../images/66a1267b-8a56-4880-99b0-8e16538ad8e9-removebg-preview.png" width="67px" height="45px">   <img src="../../images/09fa426c-4291-4737-9773-d3b7f6be9dee-removebg-preview.png" width="60px" height="60px">   <img src="../../images/bea6be4b-c73c-45ba-9847-e25d8a33913f-removebg-preview.png" width="65px" height="45px"> 

              <hr>
              <center><b>Created By GROUP  | All Rights Reserved</b></center><br>
            

</div>

<!--Link jquery and javascript-->
<script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/adminPanel.js"></script>

</body>

</html>