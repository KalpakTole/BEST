<?php

$link = mysqli_connect("localhost", "root", "", "best");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql="SELECT `basic_pay` FROM `salary` WHERE emp_id=$_POST[eidd]";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo json_encode($row);
}


mysqli_close($link);
?>