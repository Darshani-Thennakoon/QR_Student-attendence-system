<?php
include_once('../../functions/userFunctions.php');
$result = deleteUsers($_POST['id']);
echo $result;
?>