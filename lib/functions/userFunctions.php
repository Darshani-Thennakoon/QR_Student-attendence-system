<?php
//lets start the sessions
session_start();

//first we need to import database connection 
include_once("db_conn.php");

//lets create our userfunction

function userRegistration($name,$email,$pwd,$phone,$nic){
    
    //create db connection
    $db_conn = Connection();

    //insert query section(If your insert any data into char ,varchar, date and float types you need warp that value by using single quotes)
    $insertSql = "INSERT INTO user_tbl (user_name,user_email,user_phone,user_nic,user_role,user_status) 
                  VALUES('$name','$email','$phone','$nic','Admin',1);";
    

    $sqlResult = mysqli_query($db_conn,$insertSql);

   /* //check database errors
    if(mysqli_connect_errno($sqlResult)){
        echo(mysqli_connect_error($sqlResult));
    } 

    if($db_conn->mysqli_connect_error){
        echo($db_conn->mysqli_connect_error);
    } */

    if($sqlResult>0){
        //if the registration result is greater than 0 then lest feed data into our login table as well.
        //lets use MD5 
        $newPwd = md5($pwd);


        $insertLogin = "INSERT INTO login_tbl (login_email,login_pwd,login_role,login_status) 
                        VALUES('$email','$newPwd','Admin',1);";
        
        $loginResult = mysqli_query($db_conn,$insertLogin);
        
      /*  //database error checking
        if(mysqli_connect_errno($loginResult)){
            echo(mysqli_connect_error($loginResult));
        } 

        if($db_conn->mysqli_connect_error){
        echo($db_conn->mysqli_connect_error);
    } */
?> <script>
        alert("Your Registration is Success!"); 
        
        window.location.href='../../../index.php';</script> <?php
    }
    else{ ?> <script>
        return("Please try again!"); 
        window.location.href='../../../index.php';</script> <?php
    }
}

//lets create a Athuntication function (Login function)

function Authentication($userName,$userPwd){

    //create db connection
    $db_conn = Connection();

    //SQL USER CHECK
    $sqlUserFetch = "SELECT * FROM login_tbl WHERE login_email = '$userName';";
    $sqlResult = mysqli_query($db_conn,$sqlUserFetch);

    /*
     //check database errors
     if(mysqli_connect_errno($sqlResult)){
        echo(mysqli_connect_error($sqlResult));
    } 

    if($db_conn->mysqli_connect_error){
        echo($db_conn->mysqli_connect_error);
    } */


    //first we need to convert user password into a hash value
    $newPwd = md5($userPwd);

    //we need to check the number of rows
    $nor = mysqli_num_rows($sqlResult);

    //noe im validating the number of records are greater than 0 or not 
    if($nor>0){
        //im executes the code

        //first we need to fetch the records
        $rec = mysqli_fetch_assoc($sqlResult);
        
        //first we needs to validate your password
        if($rec['login_pwd'] == $newPwd){

            //lets check the user status
            if($rec['login_status'] == 1){

                //check user role
                if($rec['login_role'] == "Admin"){

                    //if the user is valid then we need to create a cookie and a session

                    //create a cookie
                    setcookie("Login29",$rec['login_id'],time()+60*60);

                    //lets create a session
                    $_SESSION['loginName'] = $rec['login_email'];
                    $_SESSION['loginId'] = $rec['login_id'];

                    //now lets redirect our user to the dashboard
                    header('location:lib/views/admin.php');


                }
               

            }
            else{
                return("Your Account has been Diactivated!");
            } 

        }
        else{
            return("Your password is not correct,Please try again!");
        }
    }
    else{
        return("No records are founds!");
    }


}


function stuRegister($stuId,$stuName,$stuEmail,$stuNic,$stuTel,$stuDob){
     //create database connection
     $db_conn = Connection();
     $insert = "INSERT INTO stu_tbl(stu_id,stu_name,stu_mail,stu_nic,stu_tel,stu_dob)
     VALUES('$stuId','$stuName','$stuEmail','$stuNic','$stuTel','$stuDob');";

     $result = mysqli_query($db_conn,$insert);

     /*
     //datbase error checking
     if(mysqli_connect_errno($result)){
        echo(mysqli_connect_error($result)); 
     }
     if($result>0){
         return 1;
     }else{
         return 0;
     }
     */
}

//delete function
function deleteUsers($id){
    //create database connection
    $db_conn = Connection();
    $query = "DELETE FROM stu_tbl WHERE stu_id = '$id'";
    $queryResult = mysqli_query($db_conn,$query);

    /*
    //check the databse errors
    if($db_conn->connect_errno){
        echo($db_conn->connect_error);
    }
    if($queryResult>0){
        return 1;
    }else{
        return 0;
    }     

    */
}

//function for edit EMP

function editStu($stuId,$stuName,$stuEmail,$stuNic,$stuTel,$stuDob){
       //create database connection
       $db_conn = Connection();
       $query = "UPDATE stu_tbl SET stu_id = '$stuId',stu_name = '$stuName',stu_mail = '$stuEmail',stu_nic = '$stuNic',stu_tel = '$stuTel',stu_dob = '$stuDob' WHERE stu_id = '$stuId'";
       $Result = mysqli_query($db_conn,$query);


       /*
       if($db_conn->connect_errno){
         echo($db_conn->connect_error);
     }
     if($Result>0){
         return 1;
     }else{
         return 0;
     }

     */

}







?>