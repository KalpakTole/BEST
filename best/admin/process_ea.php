<?php
//employee_add.php madhun values yetayet

$link = mysqli_connect("localhost", "root", "", "best");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
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
$uname=$_POST['username'];
$password=md5($_POST['password']);
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


$sql = "INSERT INTO `employee_details`(`emp_id`, `first_name`, `last_name`, `department`, `age`, `mob`, `doj`, `dob`, `gender`, `email`, `privilege`, `desig`) VALUES ('$eid', '$firstname', '$lastname', '$class_level', '$age', '$phone1st',DATE '$doj',DATE '$dob', '$gender', '$email', '$privilege', '$desig')";




if(!mysqli_query($link, $sql)){
    echo "Employee Exists";
}
else{
    $sq2="INSERT INTO `login`(`username`, `password`, `emp_id`) VALUES ('$uname','$password','$eid')";
    $sq = "INSERT INTO `earnings`(`emp_id`, `basic_pay`,`hra`) VALUES ('$eid', '$basic_pay','$hra');";
    $sq1 = "INSERT INTO `deductions`(`emp_id`) VALUES ('$eid');";
    if(mysqli_query($link, $sq) ){
        
        if(mysqli_query($link,$sq2)) { 
            if(mysqli_query($link,$sq1)){
                    echo "ADDED SUCCESFULLY";    
            }
            
        }
    }




}
// Close connection
mysqli_close($link);
?>

