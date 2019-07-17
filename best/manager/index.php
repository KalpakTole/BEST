<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="../css/login_form.css">
   <link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="../jquery-3.4.1.js"></script>
   <script src="../bootstrap\js\bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../css/animate.css">
</head>
<script type="text/javascript">var a ="manager";</script>
<script type="text/javascript" src="../vali.js">
	
</script>

<body>
	<div class="sidenav">
         <div class="login-main-text">
            <h2>Employee Payroll System <br> Login Page</h2>
            <p>BEST Undertaking</p>
            
         </div> 
      </div>
      <div class="main">
      	<h1 class="display-4 animated fadeInUp" style="margin-left: 5%; margin-top:2%">Welcome Manager!</h1>
         <div class="col-md-5 col-sm-12">
            <div class="login-form">
               <form  method="post">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name"  id='uname' >
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password"  id='pword'>
                  </div>
				        <div id="note" class="text-danger"></div>
                  <button type="button" onclick="myFunction()" class="btn btn-black" id='loginBtn'>Login</button>
                  
               </form>
            </div>
         </div>
      </div>
</body>
<script>
var input = document.getElementById("pword");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("loginBtn").click();
  }
});
</script>


</html>