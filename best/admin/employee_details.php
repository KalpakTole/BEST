<html>

<?php
$servername = "localhost";
$username ="root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password,"best");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM employee_details;";
$result = mysqli_query($conn, $sql);
echo "<table>";
while($row=mysqli_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$row['emp_id']."</td>"; echo "<td>".$row['first_name']."</td>";
	echo "</tr>";
}

echo "</table>";
mysqli_close($conn);

?>

</html>