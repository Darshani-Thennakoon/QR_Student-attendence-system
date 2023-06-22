<?php include_once('lib/functions/db_conn.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Webcam</title>

        <!-- Include Bootstrap for styling -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--Link jquery and javascript-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
    </head>
    <body>
  <center><p style="font-size:30px;margin-top:20px;"><b>Mark your attendance</b></p><center><br><br>

    <div class="col-4">
    <div id="reader" width="600px"></div>
    </div>
    <div class="mt-4">
      <form  id="email" action="mark.php" method="post" class="form-horizontal"> 
  <lable><b>Email :</b></lable>  
<input type="text" id="scan" name="scan"><br><br><br>
<input type="submit" id="sub" name="sub" value="Submit" class="btn btn-outline-danger">

</div>
</form>

</div>

    <script src="js/html5-qrcode.min.js" type="text/javascript"></script>
    
  
    <script>
function onScanSuccess(decodedText, decodedResult) {
  // handle the scanned code as you like, for example:
  console.log(`Code matched = ${decodedText}`, decodedResult);

 

  

    
    $ ('#scan') .val (decodedText);
  
   window.alert("Your Email : "+decodedText);
}



function onScanFailure(error) {
  // handle scan failure, usually better to ignore and keep scanning.
  // for example:
  console.warn(`Code scan error = ${error}`);
}

let html5QrcodeScanner = new Html5QrcodeScanner(
  "reader",
  { fps: 10, qrbox: {width: 250, height: 250} },
  /* verbose= */ false);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);


</script>


</body>

</html>

