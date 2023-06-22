<?php
include_once('../../functions/userFunctions.php');
$result = editStu($_POST['stuId'],$_POST['stuName'],$_POST['stuEmail'],$_POST['stuNic'],$_POST['stuTel'],$_POST['stuDob']);
echo ($result)
?>