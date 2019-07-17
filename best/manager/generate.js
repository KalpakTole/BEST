function genSlip(){
	
	var month= $("#month").val();
	var leaves= $("#leaves").val();
	var eid =$("#emp_id").val();
	var year = $("#year").val();
	
	
	$.post('slip_calc.php',{month:month, leaves:leaves,eid:eid,year:year}, function(data, status){
		
	if(data=="dup_err"){
		alert("Slip For given Year, Month and Employee already Exists");
	}
	else if(data=="day_err"){
		alert("Invalid no. of leaves");
	}
	

	else if(data=="null_err"){
		alert("Non Existent Employee Record");
	}
	else
	{
		var obj = JSON.parse(data);
		document.getElementById("details").style.display = "block";
		document.getElementById("name").innerHTML = obj.first_name+" "+obj.last_name;
		document.getElementById("basic").innerHTML = obj.basic_pay;
		document.getElementById("DA").innerHTML = obj.DA;
		document.getElementById("hra").innerHTML = obj.HRA;
		document.getElementById("TA").innerHTML =obj.TA;
		document.getElementById("MA").innerHTML =obj.MA;
		document.getElementById("lic").innerHTML =obj.LIC;
		document.getElementById("pf").innerHTML =obj.PF;
		document.getElementById("netsal").innerHTML =obj.netsal;
		
	}
	
		
});
	


}