<?php
// include the function file
include_once('../../functions/userFunctions.php');
$result = stuRegister($_POST['stuId'],$_POST['stuName'],$_POST['stuEmail'],$_POST['stuNic'],$_POST['stuTel'],$_POST['stuDob']);

?>