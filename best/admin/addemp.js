function addEmp(){
	var firstname=$("#firstname").val();
	var lastname=$("#lastname").val();
	var gender=$("#gender").val();
	var dob=$("#dob").val();
	var eid=$("#eid").val();
	var privilege=$("#privilege").val();
	var username=$("#username").val();
	var email=$("#email").val();
	var password=$("#password").val();
	var phone1st=$("#phone1st").val();
	var doj=$("#doj").val();
	var class_level=$("#class_level").val();
	var desig=$("#desig").val();
	var basic_pay=$("#basic_pay").val();
	var hra=$("#hra").val();
	$.post('process_ea.php',{firstname:firstname,lastname:lastname,gender:gender,eid:eid,dob:dob,privilege:privilege,
			email:email,hra:hra,phone1st:phone1st,doj:doj,class_level:class_level,desig:desig,basic_pay:basic_pay,username:username,password:password

	},function (data,status) {
		if (data){
			alert(data);
		}
		else{
			alert(data);
		}
	});
}