<?php
session_start();
error_reporting(0);
include('../db.php');
//error_reporting(0);
if($_SESSION['p']!=3)
 echo "<script> location.href='/best/';</script>";

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/ea.css">
        <link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="../bootstrap\js\bootstrap.min.js"></script>
        <script src="../jquery-3.4.1.js"></script>
        <script type="text/javascript" src='update.js'></script>
 <style type="text/css">
    	
    	.btn-black{
    background-color: #000 !important;
    color: #fff;
}
    .btnnav {
  background-color: black;
  color: white;
  border: 2px solid #000;
}

.btnnav:hover {
  background-color: #FFF;
  color: black;
  border: 2px solid #FFF;
}
#logout:hover {
  background-color: #F00;
  color: white;
  border: 2px solid #F00;
}
    </style>


<script type="text/javascript" src="showdet.js"></script>


    </head>
<!-- <script type="text/javascript">

</script> -->


    <body>



        <div class="sidenav">

<div>
          <button type="button" onclick="location.href='view_employee.php'" class = " btn btnnav " >View Employee</button>
          <button type="button" onclick="location.href='extra.php'" class = " btn btnnav " >Constants</button>
          <button type="button" onclick="location.href='employee_add.php'" class = " btn btnnav " >Add Employee</button>
          <button type="button" id="logout"class = " btn btnnav"  onclick="location.href='/best/logout.php'">Logout</button>

</div>
            <div class="login-main-text">
                <h2>Employee Payroll System <br> Employee Edit Page</h2>
                <p>BEST Undertaking</p>
            </div>



        </div>
        <div class="main">
      
        
            <div class="col-md-8">
                <div class="login-form">
                    <form class="form-horizontal" method="post" id="editempform">
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Edit Employee Details</legend>
                            
                            <!-- <div class="form-group">
                                <label class="col-md-8"></label>
                                <div class="col-md-8">
                                    <button id="editemp" name="editemp" class="btn btn-black">Edit Employee</button>
                                </div>
                            </div> -->


                            <div class="form-group">
                                <label class="col-md-8 control-label" for="eid">Employee ID</label>  
                                <div class="col-md-8">
                                    <input id="eid" name="eid" type="text" placeholder="Employee ID" class="form-control input-md">
                                </div>
                            </div>


                            
                            <div class="form-group">
                                <label class="col-md-8"></label>
                                <div class="col-md-8">
                                    <button id="view" name="view" class="btn btn-dark" type="button" onclick="showInput();">View Details</button>
                                </div>
                            </div>


<div id = "hidden_part">
                        <div class="form-group">
                                <label class="col-md-8 control-label" for="firstname">First Name</label>  
                                <div class="col-md-8">
                                    <input id="firstname" name="firstname" type="text" placeholder="Firstname" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="lastname">Last Name</label>  
                                <div class="col-md-8">
                                    <input id="lastname" name="lastname" type="text" placeholder="Lastname" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Multiple Radios (inline) -->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="gender">Gender</label>
                                <!-- <div class="col-md-8"> 
                                    <label class="radio-inline" for="gender-0">
                                    <input type="radio" name="gender" id="male" value="Male">
                                    Male
                                    </label> 
                                    <label class="radio-inline" for="gender-1">
                                    <input type="radio" name="gender" id="female" value="Female">
                                    Female
                                    </label>
                                </div> -->
                                 <div class="col-md-8">
                                    <select id="gender" class="form-control" required>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        
                                        
                                    </select>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="dob">Date Of Birth</label>  
                                <div class="col-md-8">
                                    <input id="dob" name="dob" type="date" placeholder="DOB" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-8 control-label" for="privilege">Privilege</label>
                                <!-- <div class="col-md-8"> 
                                    <label class="radio-inline" for="privilege-0">
                                    <input type="radio" name="privilege" id="employee" value="0">
                                    Employee
                                    </label> 
                                    <label class="radio-inline" for="privilege-1">
                                    <input type="radio" name="privilege" id="admin" value="1">
                                    Admin
                                    </label>
                                    <label class="radio-inline" for="privilege-2">
                                    <input type="radio" name="privilege" id="manager" value="2">
                                    Manager
                                    </label>
                                </div> -->
                                <div class="col-md-8">
                                    <select id="privilege"  class="form-control" required>
                                        <option  value="0">Admin</option>
                                        <option  value="1">Manager</option>
                                        <option  value="2">Employee</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="email">Email</label>  
                                <div class="col-md-8">
                                    <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="phone1st">Phone Number</label>  
                                <div class="col-md-8">
                                    <input id="phone1st" name="phone1st" type="text" placeholder="Mobile No." class="form-control input-md" required>
                                </div>

                            </div>
                            
                            <!-- Select basic_pay -->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="doj">Date Of Joining</label>  
                                <div class="col-md-8">
                                    <input id="doj" name="doj" type="date" placeholder="DOJ" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                           <div class="form-group">
                                <label class="col-md-8 control-label" for="class_level">Class</label>
                                <div class="col-md-8">
                                    <select id="class_level" name="class_level" class="form-control" required>
                                        <option value="EDP">EDP</option>
                                        <option value="ACCOUNTS">ACCOUNTS</option>
                                        <option value="TRAFFIC">TRAFFIC</option>
                                        <option value="IT">IT</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-8 control-label" for="desig">Designation</label>
                                <div class="col-md-8">
                                    <select id="desig" name="desig" class="form-control" required>
                                        <option value="DB admin">DB admin</option>
                                        <option value="Data Analyst">Data Analyst</option>
                                        <option value="Software Tester">Software Tester</option>
                                        <option value="Software Developer">Software Developer</option>
                                        <option value="Engineer">Engineer</option>
                                        <option value="Director">Director</option>
                                        <option value="Vice President">Vice President</option>
                                        <option value="President">President</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-8 control-label" for="basic_pay">Basic</label>  
                                <div class="col-md-8">
                                    <input id="basic_pay" name="basic_pay" type="float" placeholder="Basic" class="form-control input-md">
                                </div>
                            </div>
                         <div class="form-group">
                                <label class="col-md-8 control-label" for="hra">HRA</label>
                                    <div class="col-md-8">
                                    <select id="hra" class="form-control" required>
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>                                    
                                        
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-8"></label>
                                <div class="col-md-8">
                                    <button id="update" name="update"  type='button' class="btn btn-dark" onclick="updateEmp()" class="form-control input-md">Update</button>
                                </div>
                            </div>


</div>
    
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    </body>
<script>
var input = document.getElementById("eid");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("view").click();
  }
});
</script>
<script>
    document.getElementById("hidden_part").style.display = "none";
</script>
</html>

