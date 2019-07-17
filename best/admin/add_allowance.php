<?php
session_start();
error_reporting(0);
include('../db.php');
//error_reporting(0);


$ta=$_POST['ta'];
$ma=$_POST['ma'];
$leaves=$_POST['leaves'];



$sql="UPDATE `allowance` SET `TA`='$ta',`MA`='$ma' WHERE c=1";
$result=mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);

if(mysqli_num_rows($result)==0){
		
		echo mysqli_error($conn);
		exit();
	}
     
		

/*$total_days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
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
	$ta=$row['TA'];
	$ma=$row['MA'];
	$lic=$row['LIC'];
	$pf=($basic+$da)*(0.12);

	$netsal=$basic+$da+$hra+$ta+$ma-$lic-$pf;


	$flag=0;
	$s1="SELECT * FROM transaction where emp_id=$eid AND month=$month AND year=$year;";
	$r=mysqli_query($conn,$s1);
	
	if(mysqli_num_rows($r)){
		echo "dup_err";

	}
else{
	$sql="INSERT INTO transaction VALUES ($eid,$month,$year,$basic,$da,$hra,$ta,$ma,$lic,$pf,$netsal)";
	// $sql="INSERT INTO transaction VALUES (1,2,3,4,5,6,7,8,9,10)";
	$result=mysqli_query($conn,$sql);
	 

	/*$s1="SELECT * FROM transaction where emp_id=$eid AND month=$month AND year=$year";
	$r=mysqli_query($conn,$sql);

	$sql="SELECT * FROM employee_details NATURAL JOIN transaction where emp_id=$eid AND month=$month AND year=$year;";
	$result=mysqli_query($conn,$sql);
	$row= mysqli_fetch_assoc($result);
	
	echo json_encode($row);
	
	
	 
}
	$deductions=0;*/

mysqli_close($conn);
?>