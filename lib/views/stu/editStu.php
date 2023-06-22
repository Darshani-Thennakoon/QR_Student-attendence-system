<?php
include_once('../../functions/db_conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

             
 
</head>

<body >
    <div class="container mt-3">
        <div class="card" style="background-color:#D3EFFA ;">
            <div class="card-header">
               <b> Edit STU </b>
            </div>
            <div class="card-body">
                <?php
                $id = $_POST['userID'];
                $db_conn = Connection();
                $query = "SELECT * FROM stu_tbl WHERE stu_id = '$id'";
                $queryRun = mysqli_query($db_conn,$query);
                while($row = mysqli_fetch_array($queryRun)){
                    ?>
                <form id="edit_form">
                    <div class="form-group mt-2">
                        <label for="">STU ID</label>
                        <input type="text" id="stuId" value="<?php echo $row['stu_id'] ?>" name="stuId" class="form-control" placeholder="Enter STU ID" readonly>
                    </div>

                    <div class="form-group mt-2">
                        <label for="">STU Name</label>
                        <input type="text" id="stuName" value="<?php echo $row['stu_name'] ?>" name="stuName" class="form-control"
                            placeholder="Enter STU Name">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">STU Email</label>
                        <input type="email" id="stuEmail" name="stuEmail" value="<?php echo $row['stu_mail'] ?>"  class="form-control"
                            placeholder="Enter STU Email">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">STU NIC</label>
                        <input type="text" id="stuNic" name="stuNic" value="<?php echo $row['stu_nic'] ?>"  class="form-control" placeholder="Enter STU NIC">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">STU Tel</label>
                        <input type="text" id="stuTel" name="stuTel" value="<?php echo $row['stu_tel'] ?>"  class="form-control"
                            placeholder="Enter STU Phone Number">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">STU DOB</label>
                        <input type="date" id="stuDob" name="stuDob" value="<?php echo $row['stu_dob'] ?>"  class="form-control" placeholder="Enter STU DOB">
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" value="Update Details" class="btn btn-success" onclick="return false" id="editBtn">
                       <a href="../admin.php" class="btn btn-danger">Back</a>
                    </div>
                </form>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>

<script src="../../../js/jquery.js"></script>
<script src="../../../js/bootstrap.min.js"></script>

<script>
$(document).on('click','#editBtn',function(event){
    var stuName = $('#stuName').val();
    var stuEmail = $('#stuEmail').val();
    var stuNic = $('#stuNic').val();
    var stuTel = $('#stuTel').val();
    var stuDob = $('#stuDob').val();

    if(stuName == "" || stuEmail == "" || stuNic == "" || stuTel == "" || stuDob == ""){
        alert("Please Fill All Inputs");
    }else{
        event.preventDefault();
        var form = $('#edit_form')[0];
        var formData = new FormData(form);
        $.ajax({
            url:"../../route/stu/editStu.php",
            data:formData,
            type:'POST',
            processData:false,
            contentType:false,

            success:function(data){
                if(data == 1){
                    alert('User Details Updated');
                    location.reload();
                    
                }else{
                    alert('Success');
                }
                window.location = "http://localhost/project/lib/views/admin.php";
            }

        })
    }

})
</script>