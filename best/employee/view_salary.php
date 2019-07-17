
<?php
session_start();
error_reporting(0);
include('../db.php');
//error_reporting(0);
if(!(isset($_SESSION['p'])))
{
 echo "<script> location.href='/best/';</script>";
}

$eid=$_SESSION['eid'];


$month = array("January","February","March","April","May","June","July","August","September","October","November","December");
 
if (!$conn) {

	die("Connection failed: " . mysqli_connect_error());


}

 $sql = "SELECT first_name, last_name FROM employee_details WHERE emp_id=$eid;";
 $result = mysqli_query($conn, $sql);
 $r=mysqli_fetch_array($result);
?>

<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="../css/login_form.css">
   <link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="../bootstrap\js\bootstrap.min.js"></script>
   <script src="../jquery-3.4.1.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

   <style type="text/css">
    a{
    color: #ffffff;
    text-decoration: none;
    background-color: transparent;
    }

    a:hover {
    color: #D2D2D2;
    }

      
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
</head>
<script type="text/javascript" src="../vali.js">
	
</script>

<body>
	<div class="sidenav">
    <div style="padding-left: 8%">
          <button type="button" id="logout"class = " btn btn-outline-light btnnav"  onclick="location.href='/best/logout.php'">Logout</button>

</div>
         <div class="login-main-text">
            <h2>Employee Payroll System <br>Payslip Table</h2>
            <p>BEST Undertaking</p>
            
         </div> 
      </div>
      <div class="main">
      	<br>
        <div  class="col-md-8">
        <h5>Name :</h5>
      	
      	<h4 class="display-4"><?php echo"   ".$r['first_name']." ".$r['last_name']  ?></h4>
      </div>
        <br>
        <div>
          <div class="col-md-4" >
        <h5>Employee ID :</h5>
   
        <h4 class="display-4"><?php echo $eid;?></h4>
      </div>
    </div>
    <br>

         <div class="col-md-8">
          <h5>Payslip Table :</h5>
          <br>
         <table class = "table table-striped table-hover " cellspacing="0">

                                  <thead class="thead-light">
                                        <tr>
                                            <th>Year</th>
                                            <th>Month</th>
                                            <th>Details</th>
                                       </tr>
                                    </thead>

                  
                           
                           <?php 

                       
                           $sql = "SELECT * FROM transaction WHERE emp_id=$eid;";
                           $result = mysqli_query($conn, $sql);
                           while($row=mysqli_fetch_array($result)){
                                                               
                                                                   echo "<tr>";
                                                                   echo  "<td>".$month[$row['month']-1]."</td>";echo "<td>".$row['year']."</td>";echo"<td ><button class='btn btn-black'><a href='PaySlipUI.php?m=".$row['month']."&y=".$row['year']."'>View</a></button></td>";
                                                                   echo "</tr>";
                                                                 }
                                       
                           
                           ?>                       
                                 




                                 </table>
                              </div>
                           </div>
</body>



</html>

