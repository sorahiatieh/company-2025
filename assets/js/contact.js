$(document).ready(function(){

	$("#frmContact").on("submit",function(e){
		e.preventDefault();

		$.ajax({
			url:'process/send_contact.php',
			type:'POST',
			dataType: 'json',
			data:$(this).serialize(),
			success: function($result){

				if($result.Status==1)
				{
					swal({
						title: "پیام شما با موفقیت ارسال شد.",
						text: $result.Text+" کد پیام: "+$result.LastID,
						type: "success"
					});
				}
				else{
					swal({
						title: "ارسال ناموفق",
						text: $result.Text,
						type: "error"
					});
				}
			}
		});
	});
});

