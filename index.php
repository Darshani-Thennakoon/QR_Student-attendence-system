<?php
// lets call the user function page
include_once('lib/functions/userFunctions.php');


if (isset($_POST['btnLogin'])){
//now we needs to call the Authentication function

$result=Authentication($_POST['userName'],$_POST['userPwd']);

echo($result);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Index Page</title>

    <!-- Link bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Link jquery and javascript-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>
<body >

  
    <div class="container">

    <h3 style="text-align:center; font-size:60px;color:#10598D;font-family:Times New Roman;margin-top:40px;"><b>SIGN UP</b></h3>
  
       <div class="row">
       
       <div class="col-md-6">
           
                <div class="card mt-4 text-dark  mb-3" style="max-width: 22rem;background-color: #e3f2fd;">
            <div class="card-header ">
               <b> Login section </b>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form group mt-2">
                    <lable for="">Enter your username</lable>
                       <input type="text" name="userName" id="userName" placeholder="Enter your username" class="form-control">  
                    </div>
                    <div class="form group mt-2">
                    <lable for="">Enter your password</lable>
                       <input type="password" name="userPwd" id="userPwd" placeholder="Enter your userpassword" class="form-control">  
                    </div>
                    <div class="form-group mt-2">
                      
                      <input type="submit" name="btnLogin" id="btnsave"  class="btn btn-outline-success btn-sm" >
                      <input type="reset" class="btn btn-outline-danger btn-sm">


                  </div>
                  </form>

                 

            </div>
          
            </div>
            <img src="images/in-class-to-virtual.gif"  width="300" height="300" style="vertical-align:bottom" >

                </div>

       <div class="col-md-6">

                    <div class="card mt-4  text-dark mb-3" style="max-width: 22rem;background-color: #e3f2fd;">
            <div class="card-header">
               <b> Registration view </b>
            </div>
            <div class="card-body">
               <form action="lib/route/users/registration.php" method="post">
                   <div class="form-group mt-2">
                       <lable for="">Enter your name</lable>
                       <input type="text" name="userName" id="userName" placeholder="Enter your name" class="form-control">

                   </div>
                   <div class="form-group mt-2">
                       <lable for="">Enter your email</lable>
                       <input type="email" name="userEmail" id="userEmail" placeholder="Enter your email" class="form-control">

                   
                   <div class="form-group mt-2">
                       <lable for="">Enter your password</lable>
                       <input type="password" name="userPwd" id="userPwd" placeholder="Enter your password" class="form-control">

                   </div>
                   <div class="form-group mt-2">
                       <lable for="">Enter your phone number </lable>
                       <input type="text" name="userPhone" id="userPhone" placeholder="Enter your phone number" class="form-control">

                   </div>
                   <div class="form-group mt-2">
                       <lable for="">Enter your NIC</lable>
                       <input type="text" name="userNic" id="userNic" placeholder="Enter your NIC" class="form-control">

                   </div>
                   <div class="form-group mt-2">
                      
                       <input type="submit" name="btnsave" id="btnsave"  class="btn btn-outline-success btn-sm">
                       <input type="reset" class="btn btn-outline-danger btn-sm">

                   </div>
                   
               </form>
               
            </div>
            
            </div>
           
       </div>
       <center><a href="open.php" class="btn btn-light">Back</a></center>
       </div>
     
    </div >
 
                        
</body>
</html>



