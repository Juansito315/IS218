$(document).ready(function() {
	$("#signup").click(function(){

		$("#signin-form").slideUp("slow",function(){
			$("#signup-form").slideDown("slow");
		});
	});

	$("#login").click(function(){
		$("#signup-form").slideUp("slow",function(){
			$("#signin-form").slideDown("slow");
		});
	});
});
function confirmPassword(str){
	var password=$('#pass').val();
	if (str!=password) {
		$("#password_match").html('<p  align="absmiddle"> <font color="Red">&nbsp;**password not matching</p>');
	}else{
		$("#password_match").html('<p  align="absmiddle"> <font color="green">&nbsp;Matching</p>');
	}
}