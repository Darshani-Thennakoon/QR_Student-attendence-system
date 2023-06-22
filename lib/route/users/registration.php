<?php

//we need to include our user function page
include_once('../../functions/userFunctions.php');


$result = userRegistration($_POST['userName'],$_POST['userEmail'],$_POST['userPwd'],$_POST['userPhone'],$_POST['userNic']);

echo($result);


?>