<?php
session_start();
$_SESSION['uid']='';
$servername = "localhost";
$username ="root";
$password = "";
$p=md5($_POST['password']);



// Create connection
$conn = mysqli_connect($servername, $username, $password,"best");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM login NATURAL JOIN employee_details where username='$_POST[username]' AND password='$p';";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)) {
    // output data of each row
    
    while($row= mysqli_fetch_assoc($result)) {
        echo $row['privilege'];
		

        $_SESSION['p']=$row['privilege'];
        $_SESSION['eid']=$row['emp_id'];

        
    }

}
else{
	$uerr='error';
	echo $uerr;
}

mysqli_close($conn);

?>