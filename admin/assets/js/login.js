$(document).ready(function(){
	$("#frmLogin").on("submit",function (e){
		e.preventDefault();

		$("#loading").html('<img src="assets/img/loading.gif">');

		$.ajax({
			url:'process/login.php',
			type:'POST',
			data:{
				"username":$("#frmLogin").find("[name=txtUsername]").val(),
				"password":$("#frmLogin").find("[name=txtPassword]").val()
			},
			dataType: 'json',
			success:function($result){
				if($result.Status==1){
					alert($result.Text);
					document.location="index.php";
				}else {
					alert($result.Text);
				}
			}
		});
	});
});