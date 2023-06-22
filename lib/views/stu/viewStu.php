<?php

include_once('../../functions/db_conn.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Users</title>
        <link rel="stylesheet" href="../../../css/bootstrap.min.css">

        
    <style>
body {
  background-image: url('../../../images/istockphoto-1185144723-170667a.jpg');
  background-size: cover;
}
</style>
</head>

<body>
 <div class="container mt-3">
 <center><b><u>Student Details</u></b></center><br>
 <div class="card">
  <div class="card-header">
    <b>Student Details</b>
  </div>
  <div class="card-body">
      <?php
      $id = $_POST['stuID'];
     // get the database connection
     $db_conn =Connection();
     $query = "SELECT*FROM stu_tbl WHERE stu_id='$id'";
     $query_run = mysqli_query($db_conn,$query);
     $nor = mysqli_num_rows($query_run);
     if($nor >0){

     while($row = mysqli_fetch_array($query_run)){
         ?>
        <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Stu ID</th>
            <th scope="col">Stu Name</th>
            <th scope="col">Stu Mail</th>
            <th scope="col">Stu NIC</th>
            <th scope="col">Stu Phone</th>
            <th scope="col">Stu DOB</th>
          
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><?php echo $row['stu_id']?></th>
            <td><?php echo $row['stu_name']?></td>
            <td><?php echo $row['stu_mail']?></td>
            <td><?php echo $row['stu_nic']?></td>
            <td><?php echo $row['stu_tel']?></td>
            <td><?php echo $row['stu_dob']?></td>
            
          </tr>
          
        </tbody>
      </table>

      
<?php
     }
    }else{
        ?>
        <h3 style="text-align:center;color:red;">Data Not Found</h3>
        <?php
    }
    
      ?>


</div>
</div>
<a href="../admin.php" class="btn btn-danger mt-4">Back</a><br><br><br><br><br><br><br><br><br><br>




<marquee><img src="../../../images/WhatsApp_Image_2022-02-18_at_21.15.34-removebg-preview.png" width="100" height="100">
<p><b>International Technical Institute<b></p>
</marquee>
      
</div>

</body>
</html>