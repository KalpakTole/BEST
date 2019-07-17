 function showInput() { 

    document.getElementById("hidden_part").style.display = "inline";

    var eeid=$("#eid").val();
    $.post('edit_ea.php', {eidd:eeid},function(data,status){
    	
    		var obj = JSON.parse(data);
    		document.getElementById("firstname").value = obj.first_name;
    		document.getElementById("lastname").value = obj.last_name;
    		document.getElementById("dob").value = obj.dob;
    		document.getElementById("phone1st").value = obj.mob;
    		document.getElementById("doj").value = obj.doj;
    		document.getElementById("email").value = obj.email;
    		document.getElementById("privilege").value = obj.privilege;
            document.getElementById("gender").value = obj.gender;
            document.getElementById("class_level").value = obj.department;
            document.getElementById("basic_pay").value = obj.basic_pay;
            document.getElementById("hra").value = obj.HRA;
            document.getElementById("desig").value = obj.desig;

    });


    // $.post('edit_basic.php', {eidd:eeid},function(data,status){
    //     if(data){
    //         var obj = JSON.parse(data);
    //         document.getElementById("basic_pay").value = obj.basic_pay;
    //     };
    // });
}