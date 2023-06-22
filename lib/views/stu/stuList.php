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
          <b> Manage STU </b>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    
                    <tr>
                    <th scope="col">Stu ID</th>
                            <th scope="col">Stu Name</th>
                            <th scope="col">Stu Mail</th>
                            <th scope="col">Stu NIC</th>
                            <th scope="col">Stu Phone</th>
                            <th scope="col">Stu DOB</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
                           
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $db_conn = Connection();
                        $query = "SELECT * FROM stu_tbl";
                        $query_run = mysqli_query($db_conn,$query);
                        while($row = mysqli_fetch_array($query_run)){
                           ?>
                            <tr>
                            <th scope="row"><?php echo $row['stu_id'] ?></th>
                            <td><?php echo $row['stu_name'] ?></td>
                            <td><?php echo $row['stu_mail'] ?></td>
                            <td><?php echo $row['stu_nic'] ?></td>
                            <td><?php echo $row['stu_tel'] ?></td>
                            <td><?php echo $row['stu_dob'] ?></td>
                            <td><button class="btn btn-danger deleteBtn" id="<?php echo $row['stu_id'] ?>">D</button></td>
                            <td>
                                <form action="stu/editStu.php" method="POST">
                                    <input type="hidden" name="userID" value="<?php echo $row['stu_id']?>">
                                    <input type="submit" value="E" class="btn btn-success">
                                </form>
                            </td>
                            
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
<script>
    $(document).ready(function(){
        $(".deleteBtn").click(function(){
            event.preventDefault();
            var del = $(this).attr("id");
            $.ajax({
                method:"POST",
                url:"../route/stu/deleteUsers.php",
                data:{id:del},
                dataType:"html",
                success: function(data){
                    if(data  == 1){
                        alert("Data Deleted");
                        location.reload();

                    }else{
                        alert("Data Deleted");
                    }
                    window.location = "http://localhost/project/lib/views/admin.php";
                }
               
            })
        })
    })
</script>
