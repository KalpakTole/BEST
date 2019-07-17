<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "best");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



$sql="SELECT * FROM `employee_details` NATURAL JOIN `earnings` WHERE emp_id=$_POST[eidd];";
$result=mysqli_query($link,$sql);
while($row =mysqli_fetch_assoc($result)){
    echo json_encode($row);
}

?>