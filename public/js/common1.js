$(document).ready(function(){
	$("#btn_login").click(function(){
		var user = $("#username").val();
		var pass = $("#password").val();
		if(user=='' || pass == ''){
			alert("Please fill all fields!");
		}
		else if(user == "aa" && pass == "11") {
			$("#login").hide();
			$("#admin").show();
			return false;
		}
		else{
			alert("Fail username or fail password, Please input again!")
		}
	});
});