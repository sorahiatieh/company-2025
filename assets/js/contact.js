$(document).ready(function(){
	$("#frmContact").onsubmit(function (e){
		e.preventDefault();

		$.ajax({
			url:'process/send_contact.php',
			type: 'POST',
			data:$(this).serializable(),
			dataType: 'json',
			success: function ($result){
				if ($result.Status==1){
					swal({
						title: "ارسال پیام",
						text: $result.Text+"<br> کد پیام: "+$result.LastID,
						type: "success"
					});
				}else {
					swal({
						title: "ارسال ناموفق",
						text: $result.Text,
						type: "error"
					});
				}
			}
		})
	})

});
