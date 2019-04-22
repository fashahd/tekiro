document.addEventListener('contextmenu', event => event.preventDefault());

$('#formlogin').submit(function(event) {
    event.preventDefault();
		var form = $('#formlogin');
		var username = $("#username").val();
		var password = $("#password").val();

	$.ajax({
		type : 'POST',
		url  : toUrl+"auth/validation",
		data : {username:username,password:password},
		dataType: "json",
		success: function(data){
			console.log(data);
			if(data.status == 'sukses'){
				swal({
					title: "Good job!",
					text: data.message,
					icon: "success",
					button: "OK",
				}).then((value) => {
					window.location.href=toUrl+'home';
				});
			}else{
				swal({
					title: "Oopss!",
					text: data.message,
					icon: "warning",
					button: "OK",
				});
			}
		},error: function(xhr, ajaxOptions, thrownError){            
			console.log(xhr.responseText);
			$("#loginbutton").html('<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>');
		}
	});
});