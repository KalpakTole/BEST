<?php
session_start();
error_reporting(0);
include('../db.php');
//error_reporting(0);


$dai=$_POST['dai'];
$month=$_POST['month'];
$year=$_POST['year'];




$sql="INSERT INTO `daindex`(`year`, `month`, `DA_index`) VALUES ('$year','$month','$dai') ON DUPLICATE KEY UPDATE DA_index = '$dai'";
$result=mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);



mysqli_close($conn);
?>
     