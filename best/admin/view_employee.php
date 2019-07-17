<?php
session_start();
error_reporting(0);
include('../db.php');
//error_reporting(0);
if($_SESSION['p']!=3)
 echo "<script> location.href='/best/';</script>";

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>View Employees</title>
 	<link rel="stylesheet" type="text/css" href="v_emp.css">
 <script src="../jquery-3.4.1.js"></script>
    <link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../bootstrap\js\bootstrap.min.js"></script>
    
    <style type="text/css">

 <style type="text/css">
        
        .btn-black{
    background-color: #000 !important;
    color: #fff;
}
    .btnnav:hover {
  background-color: #FFF;
  color: black;
  border: 0px solid #FFF;

}

#logout:hover{

background-color: #F00;
color: #FFF;
border:0px solid #F00;
}
    </style>

 </head>
 <body>

 	<nav class="navbar navbar-expand-sm bg-dark navbar-dark" >
  <ul class="navbar-nav" style="margin-left: 20px;">
    <li class="nav-item">
      <button type="button" onclick="location.href='employee_add.php'" class = " btn btn-dark btnnav " >Add Employee</button>
    </li>
    <li class="nav-item">
      <button type="button" onclick="location.href='edit_employee.php'" class = " btn btn-dark btnnav " >Edit Employee</button>
    </li>
    <li class="nav-item">
      <button type="button" onclick="location.href='extra.php'" class = " btn btn-dark btnnav " >Constants</button>
    </li>
    <li class="nav-item">
      <button type="button" onclick="location.href='/best/logout.php'" class = " btn btn-dark btnnav " style="float: right;" id='logout' >Logout</button>
    </li>
  </ul>
</nav>
 	
<section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Administrators</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Managers</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Employees</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <table class = "table table-striped table-hover " cellspacing="0">

                                  <thead class="thead-light">
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Gender</th>
                                            <th>Class</th>
                                            <th>Age</th>
                                            <th>Mobile Number</th>
                                            <th>Date Of Joining</th>
                                            <th>Email</th>

                                        </tr>
                                    </thead>


                                    <?php 
// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}
									$sql = "SELECT * FROM employee_details WHERE privilege=3;";
									$result = mysqli_query($conn, $sql);
									while($row=mysqli_fetch_array($result)){
									                                    
									                                        echo "<tr>";
									                                        echo    "<td>".$row['emp_id']."</td>";echo "<td>".$row['first_name']."</td>";echo "<td>".$row['last_name']."</td>";echo "<td>".$row['gender']."</td>";echo "<td>".$row['department']."</td>";echo "<td>".$row['age']."</td>";echo "<td>".$row['mob']."</td>";echo "<td>".$row['doj']."</td>";echo "<td>".$row['email']."</td>";
									                                        echo "</tr>";
									                                      }
									            
									
									?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class = "table table-striped table-hover " cellspacing="0">

                                  <thead class="thead-light">
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Gender</th>
                                            <th>Class</th>
                                            <th>Age</th>
                                            <th>Mobile Number</th>
                                            <th>Date Of Joining</th>
                                            <th>Email</th>

                                        </tr>
                                    </thead>

                                    <?php 
// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}
									$sql = "SELECT * FROM employee_details WHERE privilege=1;";
									$result = mysqli_query($conn, $sql);
									while($row=mysqli_fetch_array($result)){
									                                    
									                                        echo "<tr>";
									                                        echo    "<td>".$row['emp_id']."</td>";echo "<td>".$row['first_name']."</td>";echo "<td>".$row['last_name']."</td>";echo "<td>".$row['gender']."</td>";echo "<td>".$row['department']."</td>";echo "<td>".$row['age']."</td>";echo "<td>".$row['mob']."</td>";echo "<td>".$row['doj']."</td>";echo "<td>".$row['email']."</td>";
									                                        echo "</tr>";
									                                      }
									            
									
									?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class = "table table-striped table-hover " cellspacing="0">

                                  <thead class="thead-light">
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Gender</th>
                                            <th>Department</th>
                                            <th>Age</th>
                                            <th>Mobile Number</th>
                                            <th>Date Of Joining</th>
                                            <th>Email</th>
                                            

                                        </tr>
                                    </thead>
                                    <?php 
// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}
									$sql = "SELECT * FROM employee_details WHERE privilege=2;";
									$result = mysqli_query($conn, $sql);
									while($row=mysqli_fetch_array($result)){
									                                    
									                                        echo "<tr>";
									                                        echo    "<td>".$row['emp_id']."</td>";echo "<td>".$row['first_name']."</td>";echo "<td>".$row['last_name']."</td>";echo "<td>".$row['gender']."</td>";echo "<td>".$row['department']."</td>";echo "<td>".$row['age']."</td>";echo "<td>".$row['mob']."</td>";echo "<td>".$row['doj']."</td>";echo "<td>".$row['email']."</td>";
									                                        echo "</tr>";
									                                      }
									            
								
									?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php mysqli_close($conn); ?>

 </body>
 </html>