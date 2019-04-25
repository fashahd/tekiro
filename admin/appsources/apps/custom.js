CKEDITOR.replace( 'footer' );
CKEDITOR.replace( 'footer_id' );

document.addEventListener('contextmenu', event => event.preventDefault());

function confirmDelete(id = null){				
	swal({
		title: "Are You Sure ?",
		text: "Image Delete Permanently",
		icon: "warning",
		buttons: {
			cancel: "Cancel",
			catch: {
			  	text: "Confirm",
			  	value: "confirm",
			}
		},
	}).then((value) => {
		switch (value) { 
			case "defeat":
			  	break;
		 
			case "confirm":
				$.ajax({
					type : 'POST',
					url  : toUrl+"home/deleteMedia",
					data : {id:id},
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
			 	break;
		}
	});
}

$('#formupload').submit(function(event) {
	event.preventDefault();
	var formData = new FormData(this);
	$('.msg').hide();
	$('.progress').show();	
	$.ajax({
		xhr : function() {
			var xhr = new window.XMLHttpRequest();
			xhr.upload.addEventListener('progress', function(e){
				if(e.lengthComputable){
					console.log('Bytes Loaded : ' + e.loaded);
					console.log('Total Size : ' + e.total);
					console.log('Persen : ' + (e.loaded / e.total));
					
					var percent = Math.round((e.loaded / e.total) * 100);
					
					$('#progressBar').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
				}
			});
			return xhr;
		},
		
		type : 'POST',
		url : toUrl+'home/uploadImage',
		data : formData,
		processData : false,
		contentType : false,
		dataType: "json",
		success : function(response){
			console.log(response);
			$('form')[0].reset();
			$('.progress').hide();
			$('.msg').show();
			if(response.status != "success"){
				swal({
					title: "Oopss!",
					text: response.message,
					icon: "warning",
					button: "OK",
				});
			}else{			
				swal({
					title: "Good job!",
					text: response.message,
					icon: "success",
					button: "OK",
				}).then((value) => {
					window.location.href=toUrl+'home';
				});
			}
		},error: function(xhr, ajaxOptions, thrownError){            
			console.log(xhr.responseText);
			swal({
				title: "Oopss!",
				text: "Failed To Connect Server",
				icon: "warning",
				button: "OK",
			});
		}
	});
});

$('#footer-form').submit(function(event) {
    event.preventDefault();
    var content 	= CKEDITOR.instances.footer.getData();
    var content_id 	= CKEDITOR.instances.footer_id.getData();
	$.ajax({
		type : 'POST',
		url  : toUrl+"home/updateAbout",
		data : {content:content,content_id:content_id},
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