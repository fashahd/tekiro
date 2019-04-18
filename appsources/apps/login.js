document.addEventListener('contextmenu', event => event.preventDefault());

$('#formlogin').submit(function(event) {
    event.preventDefault();
    var form = $('#formlogin');	
    $("#loginbutton").html('<span class="btn waves-effect waves-light col s12">Loading....</span>');

	$.ajax({
		type : 'POST',
		url  : toUrl+"login/auth",
		data : form.serialize(),
		dataType: "json",
		success: function(data){
			// console.log(data);
			// return;
			if(data.status == 200){
				window.location.href=toUrl+"dashboard";
				return;
			}else{
				swal({
					title: 'Ooops',
					text: data.message,
					icon: 'warning',
					button: {
					  text: "Continue",
					  value: true,
					  visible: true,
					  className: "btn btn-primary"
					}
				})
				return;
			}
		},error: function(xhr, ajaxOptions, thrownError){            
			alert(xhr.responseText);
			$("#loginbutton").html('<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>');
		}
	});
});