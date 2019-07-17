<?php
/*$link = mysqli_connect("localhost", "root", "", "best");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}*/

include('../db.php');

$eid = $_POST['eid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$class_level = $_POST['class_level'];
$desig = $_POST['desig'];
$phone1st = $_POST['phone1st'];
$doj = $_POST['doj'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email =$_POST['email'];
$privilege = $_POST['privilege'];
$basic_pay = $_POST['basic_pay'];
$hra=$_POST['hra'];

if (!(preg_match("/^[1-9]{1}[0-9]{9}$/", $phone1st)))
{
    echo "Phone Number Format Invalid!";
    exit();
}

if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email))
{ 
echo "Invalid Email";
exit();
}

/*if (ctype_alpha(str_replace(' ', '', $firstname)) === false) {
  echo 'Name must contain letters and spaces only';
  exit();
}*/
/*if ( !preg_match ("/[a-zA-Z]/",$firstname)) {
   echo "Name must only contain letters!";
   exit();
}*/ 
function ageCalculator($dob){
    if(!empty($dob)){
        $birthdate = new DateTime($dob);
        $today   = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        return $age;
    }else{
        return 0;
    }
}


function getDateForDOB(string $dob){
    $timestamp = strtotime($dob);
    $date_formated_dob = date('Y-m-d', $timestamp);
    return $date_formated_dob;
}

function getDateForDOJ(string $doj){
    $timestamp = strtotime($doj);
    $date_formated_doj = date('Y-m-d', $timestamp);
    return $date_formated_doj;
}

$age = ageCalculator($dob);
if ($age < 18 || $age > 58)
{
    echo "Improper Age";
    exit();
}


$date1=date_create($doj);
$date2=date_create($dob);
$diff=date_diff($date1,$date2);
if ($diff->format("%y") < 18 || $diff->format("%y") > 58)
{
    echo "Improper Age";
    exit();
}


 $sql = "UPDATE `employee_details` SET `first_name`='$firstname',`last_name`='$lastname',`department`='$class_level',`age`='$age',`mob`='$phone1st',`doj`= DATE '$doj',`dob`= DATE '$dob',`gender`='$gender',`email`='$email',`privilege`='$privilege',`desig`= '$desig' WHERE emp_id='$eid';";
/*
echo "heloo";*/

if(!mysqli_query($conn, $sql))
{
    echo "Error";
}
else{
    $sq = "UPDATE `earnings` SET `basic_pay`='$basic_pay',`HRA`='$hra' WHERE emp_id='$eid';";
    
    if(mysqli_query($conn, $sq)){
            echo "UPDATED SUCCESSFULLY";
     }




}
// Close connection
mysqli_close($conn);
?>
