
<?php


include_once('lib/functions/db_conn.php');


if(isset($_POST['sub'])){
    $email   = $_POST['scan'];


    


$date = date("Y-m-d");
date_default_timezone_set("Asia/Kolkata");

$time= date('h:i:sa');
  

}


 
    $db_conn = Connection();
    $insert = "INSERT INTO qr_tbl(date,time,email)
    VALUES('$date','$time','$email');";

    $result = mysqli_query($db_conn,$insert);

?>
<script>
    window.alert("Attendance marked");
    window.location.href='lib/views/admin.php';
</script>