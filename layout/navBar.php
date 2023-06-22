<!-- link navbar -->
<nav class="navbar navbar-light" style="background-color: #9CC9EA;">
     <div class="container-fluid">
     <h1 style="color:#10598D;">Student Attendance</h1> 
     
        

              
             <form action="stu/viewStu.php" method="POST" class="d-flex mb-2">
                 <input class="form-control me-2" type="search" placeholder="Search by STU ID" name="stuID" aria-label="Search">
                 <button class="btn btn-outline-secondary" type="submit">Search</button>
             </form>
             
             <form action="stu/viewStug.php" method="POST" class="d-flex mb-2">
                 <input class="form-control me-2" type="search" placeholder="Search by NAME" name="stuName" aria-label="Search">
                 <button class="btn btn-outline-secondary" type="submit">Search</button>
             </form>

             <a href="../../open.php" class="btn btn-light mb-2" >Log Out</a>
             
         
     </div>
 </nav>
 <!-- end nav bar -->