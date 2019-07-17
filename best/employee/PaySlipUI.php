<?php
session_start();
error_reporting(0);
include('../db.php');
$month=$_GET['m'];
$year=$_GET['y'];
$eid=$_SESSION['eid'];
?>


<html>

<head>
	<link rel="stylesheet" type="text/css" href="PaySlipUI.css">
	<link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="../bootstrap\js\bootstrap.min.js"></script>
	<script src="../jquery-3.4.1.js"></script>
	<script type="text/javascript" src="printPage.js"></script>
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
	
</head>
<?php 
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM employee_details NATURAL JOIN transaction WHERE emp_id=$eid AND month=$month AND year=$year;";
	$result = mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
?>
<body>
	<div class="sidenav" id="dont-print">
		<div style="padding-left: 8%">
			<button type="button" id="home"class = " btn btn-outline-light btnnav"  onclick="location.href='/best/employee/view_salary.php'">Home</button>
          <button type="button" id="logout"class = " btn btn-outline-light btnnav"  onclick="location.href='/best/logout.php'">Logout</button>

</div>
		<div class="login-main-text">
			<h2>Employee Payroll System 
				<br> Pay Slip Page
				</h2>
			<p>BEST Undertaking</p>
		</div>
	</div>
	<div class="main" id="print-page">
		<div class="form-group">

			<label class="col-md-4 control-label" for="eid">Employee ID</label>
			<div class="col-md-4">
				<input id="eid" name="eid" type="int" placeholder="Employee ID" class="form-control input-md" value='<?php echo $eid;?>' disabled>
			</div>
		</div>
		<div class="row col-md-12">
			<div class="form-group col-md-4">
				<label class="control-label" for="paysheetno">Paysheet No.</label>
				<br>
				<span class="badge badge-light"><?php echo $row['sr_no'];?></span>
			</div>

			<div class="form-group col-md-8">
				<label class="control-label" for="name">Name</label>
				<br>
				<span class="badge badge-light"><?php echo $row['first_name'].' '.$row['last_name'];?></span>
			</div>

		</div>

		<div class="row col-md-12">
			<div class="form-group col-md-6">
				<label class="control-label" for="designation">Designation</label>
				<br>
				<span class="badge badge-light"><?php echo $row['desig'];?></span>
			</div>

			<div class="form-group col-md-6">
				<label class="control-label" for="department">Department</label>
				<br>
				<span class="badge badge-light"><?php echo $row['department'];?></span>
			</div>

		</div>

		<div class="row col-md-12">
			<div class="form-group col-md-6">
				<label>Year</label>
				<span class="badge badge-light"><?php echo $row['year'];?></span>

			</div>

			<div class="form-group col-md-6">
				<label>Month</label>
				<span class="badge badge-light"><?php echo $row['month'];?></span>

			</div>

		</div>

		<div class="row col-md-12">
			<div class="col-md-6">
				<label class="control-label" for="earnings">Earnings: </label>
				<br>
				
				<table class="table table-striped table-hover" cellspacing="0" border="5px" rules="all">

					<thead class="thead-light">
						<tr>
							<th>Basic Pay</th>
							<td id=basic><?php echo $row['basic_pay'];?></td>
						</tr>
						<tr>
							<th>DA</th>
							<td id=DA><?php echo $row['DA'];?></td>
						</tr>
						<tr>
							<th>HRA</th>
							<td id=hra><?php echo $row['HRA'];?></td>
						</tr>
						<tr>
							<th>TA</th>
							<td id=TA><?php echo $row['TA'];?></td>
						</tr>
						<tr>
							<th>MA</th>
							<td id=MA><?php echo $row['MA'];?></td>
						</tr>
					</thead>
				</table>
			</div>
			<div class="col-md-6">

				<label class="control-label" for="deductions">Deductions: </label>
				<br>

				<table class="table table-striped table-hover" cellspacing="0" border="5px" rules="all">

					<thead class="thead-light">
						<tr>
							<th>LIC</th>
							<td id=lic><?php echo $row['LIC'];?></td>
						</tr>
						<tr>
							<th>PF</th>
							<td id=pf><?php echo $row['PF'];?></td>
						</tr>
					</thead>
				</table>
			</div>

		</div>

		<div class="row col-md-12">
			<div class="col-md-3">
				<label class="control-label" for="totalearnings">Total Earnings: </label>
			</div>
			<div class="col-md-3">
				<span class="badge badge-light">₹ <?php echo $row['basic_pay'] + $row['DA'] + $row['HRA'] + $row['TA'] + $row['MA'];?></span>
			</div>
			<div class="col-md-3">
				<label class="control-label" for="totaldeductions">Total Deductions: </label>
			</div>
			<div class="col-md-3">
				<span class="badge badge-light">₹ <?php echo $row['LIC'] + $row['PF'];?></span>
			</div>
		</div>
<br>
		<div class="row col-md-12">
			<div class="col-md-3">
				<label class="control-label" for="netsalary">Net Salary: </label>
			</div>
			<div class="col-md-3">
				<span class="badge badge-dark">₹ <?php echo $row['netsal'];?></span>
			</div>
		</div>

		<br>
		</div>

		<div class="main" id="dont-print1">
			<div class="col-md-8">
				<button id="print" name="print" class="btn btn-black" onclick="printMyPage();">Print</button>
			</div>
		</div>
	
</body>
<script type="text/javascript">
	var start = 1947;
	var end = new Date().getFullYear();
	var options = "";
	for (var year = end; year >= start; year--) {
		options += "<option>" + year + "</option>";
	}
	document.getElementById("year").innerHTML = options;
</script>

</html>