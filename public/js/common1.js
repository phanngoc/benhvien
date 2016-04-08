$(document).ready(function(){

// login
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
// active menu-----------------
$(".choose_list li").on("click",function(){
	$(".choose_list li").removeClass("active");
	$(this).addClass("active");
});
// edit profile--------------
$(".infor_profile .btn_edit_profile").click(function(){
	$(".user").prop("disabled", false);
	$(".pass").prop("disabled", false);
	$(".fullname").prop("disabled", false);
});
$(".infor_profile .btn_ok").click(function(){
	$(".user").prop("disabled", true);
	$(".pass").prop("disabled", true);
	$(".fullname").prop("disabled", true);
});

// ------------------------
	$.datetimepicker.setLocale('en');
	$('#datetimepicker,#datetimepicker1,#datetimepicker2,#datetimepicker3').datetimepicker({
	dayOfWeekStart : 1,
	lang:'en',
	disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
	startDate:	'1986/01/05'
	});
	$('#datetimepicker,#datetimepicker1,#datetimepicker2,#datetimepicker3').datetimepicker({value:'2015/04/15 05:03',step:10});
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#display_img')
                .attr('src', e.target.result)
        };
        reader.readAsDataURL(input.files[0]);
    }
}
