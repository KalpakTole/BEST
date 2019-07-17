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
echo "Connected successfully";
echo "<br>";
echo $_POST["name"];
echo "<br>";
echo $_POST["eid"];
echo "<br>";
$sql = "INSERT INTO employee_details VALUES ($_POST[eid],'$_POST[name]','last_name','EDP',20,123456712);";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
		echo "<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
$sql = "SELECT * FROM salary where emp_id='$_POST[eid]';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['PF'];
		echo "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
</html>
