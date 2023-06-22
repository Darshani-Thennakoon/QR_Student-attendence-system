
<?php

//load the ar library
include 'phpqrcode/qrlib.php';
include_once('../lib/functions/db_conn.php');


if(isset($_POST['sub'])){
    $email   = $_POST['email'];
//data to be stored in qr


//file path
$file = "images/".$email.".png";
  
//other parameters
$ecc = 'H';
$pixel_size = 5;
$frame_size = 5;
  
// Generates QR Code and Save as PNG
QRcode::png($email, $file, $ecc, $pixel_size, $frame_size);
  
// Displaying the stored QR code if you want

echo "<div><center><img src='".$file."'></center></div><br><br>";
}

$db_conn = Connection();
    $insert = "INSERT INTO img_tbl(email,url)
    VALUES('$email','$file');";

    $result = mysqli_query($db_conn,$insert);
 

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

          
    <style>
body {
  background-image: url('../images/istockphoto-1185144723-170667a.jpg');
  background-size: cover;
}
</style>  

</head>
<body >

<center><p style="font-size:35px;font-family:Goudy Stout;">Your QR code</p>

<p style="font-size:20px;">To save your QR code right click on the QR code.</p>
<a href="../lib/views/admin.php" class="btn btn-outline-danger mt-4" style="font-size:20px;">Back</a></center><br><br><br><br><br><br><br>


<marquee><img src="../images/WhatsApp_Image_2022-02-18_at_21.15.34-removebg-preview.png" width="100" height="100">
<p><b>International Technical Institute<b></p>
</marquee>
   
</body>

</html>