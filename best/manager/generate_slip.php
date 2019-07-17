<?php
session_start();
error_reporting(0);
include('../db.php');
//error_reporting(0);
if($_SESSION['p']!=1)
 echo "<script> location.href='/best/';</script>";

?>

<html>

<head>

        <link rel="stylesheet" type="text/css" href="../css/generate_slip.css">
        <link href="..\bootstrap\css\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="..\bootstrap\js\bootstrap.min.js"></script>
        <script src="../jquery-3.4.1.js"></script>
        <script type="text/javascript" src="generate.js"></script>

        <style type="text/css">
        	
        	#details{
        		display: none;
        	}

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
		#logout:hover{

		background-color: #F00;
		color: #FFF;
		border:2px solid #F00;

		}
		</style>
</head>

<body>

    <div class="sidenav">
    	<div style="padding-left: 8%">
          <button type="button" id="logout"class = " btn btn-outline-light btnnav"  onclick="location.href='/best/logout.php'">Logout</button>

</div>
        <div class="generate-payslip">
            <h2>Employee Payroll System <br> Generate Pay Slip Page</h2>
            <p>BEST Undertaking</p>
        </div>
    </div>

    <div class="main">
        <div class="col-md-5 col-sm-12">
            <div class="gen-pay">

                <form method="post" >
                    <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text" class="form-control" placeholder="Employee ID" id = "emp_id">
                    </div>
                        
                    </div>
                    <div class="form-group">
                        <label>Month</label>
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
                   
                    
                    <div class="form-group">
                        <label>Year</label>
                     <select id ="year">

                     </select>
                    </div>



                    <div class="form-group">
                    <label>Number of Leaves taken</label>
                    <input type="number" id="leaves" class="form-control" placeholder="Days Absent">



                  </div>


                    <div class="form-group">
                        <button type="button" onclick="genSlip()" id ="genpaybutton" class="btn btn-dark">Generate Pay Slip</button>
                    </div>


                </form>
                

            </div>
          
            
       <div id=details class='container'>
       <br>
    <hr>
       
       	<br><h5>Name</h5> <div id =name class="display-4"></div><br>
        <div>
                <h5>Earnings</h5>
                 <table class = "table table-striped table-hover " cellspacing="0">

                                  <thead class="thead-dark">
                                        <tr>
                                            <th>Basic Pay</th>
                                            <th>DA</th>
                                            <th>HRA</th>
                                            <th>TA</th>
                                            <th>MA</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                            <td id=basic></td>
                                            <td id=DA></td>
                                            <td id=hra></td>
                                            <td id=TA></td>
                                            <td id=MA></td>
                                        </tr>
                              </table>
        </div> 
        <div>
                <h5>Deductions</h5>
                              <table class = "table table-striped table-hover " cellspacing="0">

                                  <thead class="thead-dark">
                                        <tr>
                                            <th>LIC</th>
                                            <th>PF</th>
                                            
                                        </tr>
                                    </thead>
                                    <tr>
                                            <td id=lic></td>
                                            <td id=pf></td>
                                        </tr>
                              </table>
        </div>   
        <div><table class = "table table-striped table-hover " cellspacing="0">
          <thead class="thead-dark">
          <tr>

            <th>Net Salary</th>
          </tr>
      </thead>
          <tr>

            <td id=netsal>
            </td>
          </tr>


        </table>
      </div>   
      <div>
        <br><br>
                        <button  onClick="document.getElementById('details').style.display = 'none';" class="btn btn-dark">Close</button>
                    </div>     
        
        </div>             
        </div>
    </div>

    
</body>
<script type="text/javascript">
   var start = 1947;
   var end = new Date().getFullYear();
   var options = "";
   for(var year = end ; year >=start; year--){
      options += "<option>"+ year +"</option>";
   }
   document.getElementById("year").innerHTML = options;
</script>
<script>
var input = document.getElementById("leaves");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("genpaybutton").click();
  }
});
</script>
</html>