CKEDITOR.replace( 'footer' );

document.addEventListener('contextmenu', event => event.preventDefault());

$('#footer-form').submit(function(event) {
    event.preventDefault();
    var content = CKEDITOR.instances.footer.getData();
	$.ajax({
		type : 'POST',
		url  : toUrl+"home/updateAbout",
		data : {content:content},
		dataType: "json",
		success: function(data){
			console.log(data);
			if(data.status == 200){
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