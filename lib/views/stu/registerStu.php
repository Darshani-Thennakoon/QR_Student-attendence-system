


<div class="card mt-3">
  <div class="card-header">
   <b>Student Register</b>
  </div>
  <div class="card-body" >
    <form id="stuRegistrationForm">
        <div class="form-group mt-2">
            <label for="">STU ID</label>
            <input type="text" id="stuId" name="stuId" class="form-control" placeholder="Enter STU ID">
        </div>

        <div class="form-group mt-2">
            <label for="">STU Name</label>
            <input type="text" id="stuName" name="stuName" class="form-control" placeholder="Enter STU Name">
        </div>
        <div class="form-group mt-2">
            <label for="">STU Email</label>
            <input type="email" id="stuEmail" name="stuEmail" class="form-control" placeholder="Enter STU Email">
        </div>
        <div class="form-group mt-2">
            <label for="">STU NIC</label>
            <input type="text" id="stuNic" name="stuNic" class="form-control" placeholder="Enter STU NIC">
        </div>
        <div class="form-group mt-2">
            <label for="">STU Tel</label>
            <input type="text" id="stuTel" name="stuTel" class="form-control" placeholder="Enter STU Phone Number">
        </div>
        <div class="form-group mt-2">
            <label for="">STU DOB</label>
            <input type="date" id="stuDob" name="stuDob" class="form-control" placeholder="Enter STU DOB">
        </div>
        <div class="form-group mt-2">
           <input type="submit" class="btn btn-outline-success" id="btnSave" name="create">
           <input type="reset" class="btn btn-outline-warning">
           <a href="admin.php" class="btn btn-outline-danger">Back</a>
          
        </div>
    </form>
    
  </div>
</div>

<script>
      //send stu registration data by using ajax

      $('#btnSave').click(function(e){
        e.preventDefault();
        
        //lets send the data to route page 
        $.ajax({
            url:"../route/stu/register.php",
            type:"post",
            data:$('#stuRegistrationForm').serialize(),
            success:function(data){

                if(data ==1){
                    alert("Success");
             
                location.reload();
                }else{
                    alert("Success");
                }
                
            }
        })
    })

    



    
</script>





