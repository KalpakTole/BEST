<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="login_form.css">
   <link href="..\bootstrap\css\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="..\bootstrap\js\bootstrap.min.js"></script>
   <script src="..\jquery-3.4.1.js"></script>

</head>
<script type="text/javascript" src='vali.js'>
      
      </script>
<body>

	<div class="sidenav">
         <div class="login-main-text">
            <h2>Employee Payroll System <br> Login Page</h2>
            <p>BEST Undertaking</p>
            
         </div>
      </div>
      <div class="main">
         <div class="col-md-5 col-sm-12">
            <div class="login-form">
               <form  method="post">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" id = "uname">

                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" id = "pword">
                  </div>
                  <button type="button" onclick="myFunction()" id ="submit" class="btn btn-black">Login</button>
                  <div id ="note"></div>
               </form>

            </div>
         </div>
         
      </div>
<script> 
if (isset($_POST['d')]){
location.href='http://localhost:8080/BEST_Employee/employee_add.php'; </script>
}
</body>


</html>