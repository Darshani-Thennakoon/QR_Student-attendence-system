<?php 
include_once('../../functions/db_conn.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Users</title>
        <link rel="stylesheet" href="../../../css/bootstrap.min.css">

</head>

<body>
  
<div class="card mt-3">
    <div class="card">
        <div class="card-header" >
          <b> View STU Attendance </b>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    
                    <tr>
                    <th scope="col">Stu Email</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            
                           
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $db_conn = Connection();
                        $query = "SELECT * FROM qr_tbl";
                        $query_run = mysqli_query($db_conn,$query);
                        while($row = mysqli_fetch_array($query_run)){
                           ?>
                            <tr>
                            <th scope="row"><?php echo $row['email'] ?></th>
                            <td><?php echo $row['date'] ?></td>
                            <td><?php echo $row['time'] ?></td>
                           
                            
                            
                            </tr>

                           <?php
                        }
                    ?>
                </tbody>
            </table>
    
          </div>
    </div>
</div>

<button onclick="window.print()" class="btn btn-outline-primary mt-4" >Print</button>

<a href="admin.php" class="btn btn-outline-danger mt-4">Back</a>
                                   
                    </body>
                    </html>

