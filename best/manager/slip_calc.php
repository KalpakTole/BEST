<?php
session_start();
error_reporting(0);
include('../db.php');
//error_reporting(0);


$eid=$_POST['eid'];
$month=$_POST['month'];
$year=$_POST['year'];
$leaves=$_POST['leaves'];
if($leaves <0 || $leaves>31){
	echo "day_err";
	exit();
}

/*$sql = "SELECT basic_pay FROM `salary` WHERE emp_id=$eid";
$result=mysqli_query($conn,$sql);
while($row= mysqli_fetch_assoc($result)) {
        $basic=$row['basic_pay'];

}

$sql = "SELECT * FROM `employee_details` WHERE emp_id=$eid";
$result=mysqli_query($conn,$sql);
while($row= mysqli_fetch_assoc($result)) {
	 echo json_encode($row);
}*/

$sql="SELECT * FROM allowance WHERE c=1;";
$result=mysqli_query($conn,$sql);
$r= mysqli_fetch_assoc($result);

$ta=$r['TA'];
$ma=$r['MA'];
/*$ta=1000;
$ma=2000;*/

$sql="SELECT * FROM earnings NATURAL JOIN deductions WHERE emp_id=$eid;";
$result=mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);

if(mysqli_num_rows($result)==0){
		
		echo "null_err";
		exit();
		
	}
$basic=$row['basic_pay'];         
		

$total_days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$worked_days = $total_days - $leaves;
if($worked_days<0){
	echo "day_err";
}
else
{
	$factor= $worked_days/$total_days;
	$cmp_basic=$basic * $factor;
	$cmp_basic=round($cmp_basic,2);
	$hra=0;

	$sq="SELECT * FROM daindex where year=$year AND month=$month;";
	$resul=mysqli_query($conn,$sq);
	$di= mysqli_fetch_assoc($resul);


	$da=(($di['DA_index']-14368)/(14368))*$basic*$factor;

	if ($row['HRA']=='1'){
		$hra=(0.30*$basic)*$factor;

	}
	
	$pf=($basic+$da)*(0.12);

	$netsal=$cmp_basic+$da+$hra+$ta+$ma-$pf;


	$flag=0;
	$s1="SELECT * FROM transaction where emp_id=$eid AND month=$month AND year=$year;";
	$r=mysqli_query($conn,$s1);
	
	if(mysqli_num_rows($r)){
		echo "dup_err";

	}
else{
	// $sql="INSERT INTO transaction VALUES ($eid,$month,$year,$basic,$da,$hra,$ta,$ma,$lic,$pf,$netsal)";
	// $sql="INSERT INTO transaction VALUES (1,2,3,4,5,6,7,8,9,10)";
	$sql = "INSERT INTO `transaction`(`emp_id`, `month`, `year`, `basic_pay`, `DA`, `HRA`, `TA`, `MA`, `PF`, `netsal`) VALUES ($eid,$month,$year,$basic,$da,$hra,$ta,$ma,$pf,$netsal)";

	$result=mysqli_query($conn,$sql);
	 

	/*$s1="SELECT * FROM transaction where emp_id=$eid AND month=$month AND year=$year";
	$r=mysqli_query($conn,$sql);*/

	$sql="SELECT * FROM employee_details NATURAL JOIN transaction where emp_id=$eid AND month=$month AND year=$year;";
	$result=mysqli_query($conn,$sql);
	$row= mysqli_fetch_assoc($result);
	
	echo json_encode($row);
	
	
	 
}
	$deductions=0;

}mysqli_close($conn);
?>