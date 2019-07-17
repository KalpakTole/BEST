<?php
session_start();
error_reporting(0);
include('../db.php');
//error_reporting(0);
if($_SESSION['p']!=3)
 echo "<script> location.href='/best/';</script>";

?>

<html>

<head>

    <link rel="stylesheet" type="text/css" href="../css/login_form.css">
    <link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../bootstrap\js\bootstrap.min.js"></script>
    <script src="../jquery-3.4.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<style>
  .btnnav {
  background-color: black;
  color: white;
  border: 2px solid #000;
}

.btnnav:hover {
  background-color: #FFF;
  color: black;
  border: 2px solid #FFF;
}
#logout:hover {
  background-color: #F00;
  color: white;
  border: 2px solid #F00;
}
</style>
</head>

<script type="text/javascript" src="../vali.js">
</script>

<body>
    <div class="sidenav" >
      <div style='margin-left: 5px;'>
          <button type="button" onclick="location.href='view_employee.php'" class = " btn btnnav " >View Employee</button>
          <button type="button" onclick="location.href='edit_employee.php'" class = " btn btnnav " >Edit Employee</button>
          <button type="button" onclick="location.href='employee_add.php'" class = " btn btnnav " >Add Employee</button>
          <button type="button" id="logout"class = " btn btnnav"  onclick="location.href='/best/logout.php'">Logout</button>

</div>
        <div class="login-main-text">
            <h2>Employee Payroll System <br> Login Page</h2>
            <p>BEST Undertaking</p>

        </div>
    </div>

    <div class="main col-md-8 col-sm-12">
     
        <div class="gen-pay">

            <form method="post">
                <div class="form-group">
                    <h4 class="display-4">DA index</h4>
                </div>
                <br>
        </div>

        <div class="row col-md-8">
            <div class="form-group col-md-2">

                <label>Month</label>
            </div>
            <div class="form-group col-md-3">
                <select id='month'>
                    <option value=1>January</option>
                    <option value=2>February</option>
                    <option value=3>March</option>
                    <option value=4>April</option>
                    <option value=5>May</option>
                    <option value=6>June</option>
                    <option value=7>July</option>
                    <option value=8>August</option>
                    <option value=9>September</option>
                    <option value=10>October</option>
                    <option value=11>November</option>
                    <option value=12>December</option>
                </select>
            </div>

            <!-- <script type="text/javascript">
                      x=document.getElementById("month");
                    </script> -->

            <div class="form-group col-md-2">

                <label>Year</label>
            </div>
            <div class="form-group col-md-3">
                <select id="year">

                </select>
            </div>
        </div>

        <div class="form-group col-md-5">
            <label>Index Value</label>
            <input type="number" id="DAI" class="form-control" placeholder="Index Value">
            <br>
            <button type="button" onclick="addDA()" id="genpaybutton" class="btn btn-dark">Add</button>

        </div>
        <br>
        <hr>
        <br>

        <!-- <div class="form-group ">
                    <label>Deductions</label><br>
                    <div class="checkbox checkbox-primary">
                      <input type="checkbox" name="LIC" value="LIC">LIC Policy</input><br>
                      <input type="checkbox" id ='HRA' name="HRA" value="HRA">House Rent</input>
                    </div>
                  </div>
 --><div class="col-md-12">
        <h4 class="display-4">Allowance Values</h4>
        <br>

        <div class="row col-md-12">
            <div class="col-md-2">
                TA
            </div>
            <div class="col-md-3">
                <input type="number" id="TA" class="form-control" placeholder="TA Value">
            </div>
        </div>
        <br>
        <div class="row col-md-12">
            <div class="col-md-2">
                MA
            </div>
            <div class="col-md-3">
                <input type="number" id="MA" class="form-control" placeholder="MA Value">
            </div>
        </div>

        <br>
        <div>
            <button type="button" onclick="addAllow()" id="genpaybutton" class="btn btn-dark">Update</button>
        </div>
     </div>
        </form>

    </div>
</div>
</body>
<script type="text/javascript">
    var start = 1947;
    var end = new Date().getFullYear();
    var options = "";
    for (var year = end; year >= start; year--) {
        options += "<option>" + year + "</option>";
    }
    document.getElementById("year").innerHTML = options;
</script>
<script type="text/javascript">
   
   function addAllow(){
   
   var ta= $("#TA").val();
   var ma= $("#MA").val();
   $.post('add_allowance.php',{ta:ta, ma:ma}, function(data, status){
      
   if(data=="null"){
      alert("Error....Contact DBA");
   }
   else
   {
      alert("successful");
      
   }
   
      
});
}


function addDA(){
   
   var dai= $("#DAI").val();
   var year= $("#year").val();
   var month =$("#month").val();
   
   $.post('add_DA.php',{dai:dai,year:year,month:month}, function(data, status){
   if(data=="null"){
      alert("Error....Contact DBA");
   }
   else
   {
      alert("successful");
      
   }
   
      
});
}
</script>

</html>