<html>
    <head>
         <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="admin_home.css">
        <link href="..bootstrap\css\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="..bootstrap\js\bootstrap.min.js"></script>
        <script src="jquery-3.4.1.js"></script>
        <link href="hamburgers-master\dist\hamburgers.css" rel="stylesheet">
    </head>
    <body>
        <div class="sidenav">
            <div class="login-main-text">
                <h2>Employee Payroll System <br> Admin Home Page</h2>
                <p>BEST Undertaking</p>
            </div>


        </div>



        <div class="main">
<div class="col-md-8 col-sm-12">
         <div class="card">
                        <p id="welcome">Welcome back, ADMIN!</p>
         </div>
</div>

            <div class="col-md-5 col-sm-12">
                <div class="card">
                    <img src="img_avatar.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4 id="imgheader"><b>Kalpak Tole</b></h4>
                        <p id="imgp">Admin</p>
                    </div>
                </div>

                
            </div>
        </div>

<script>
  // Look for .hamburger
  var hamburger = document.querySelector(".hamburger");
  // On click
  hamburger.addEventListener("click", function() {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
    // Do something else, like open/close menu


  });
</script>

    </body>
</html>