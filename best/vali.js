 function myFunction(){
 	
 	var user=$("#uname").val();
 	var pass=$("#pword").val();
 	console.log(user);
 	$.post('../validate.php',{username:user, password:pass},
 		function (data,status){

 			if (data==3){
 			
 				if ( a=='admin') {
 					location.href="view_employee.php";
 				}
 				else{
 					document.getElementById('note').innerHTML='Invalid Credentials';
 				}
 				
 				}
 			else if(data==2){
 				if ( a=='emp') {
 					location.href="view_salary.php";
				}
 				else{
 					document.getElementById('note').innerHTML='Invalid Credentials';
 				}

 				
 				}
 			else if(data == 1){
 				if ( a=='manager') {
 					location.href="generate_slip.php";
 				}
 				else if (a=='emp') {
 					location.href="/best/employee/view_salary.php";
 				}
 				else{
 					document.getElementById('note').innerHTML='Invalid Credentials';
 				}

 			}
 			else{
 				document.getElementById('note').innerHTML='Invalid Credentials';

 			}
 			} 
 		// body...
 	);


 }