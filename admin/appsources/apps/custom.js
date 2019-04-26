document.addEventListener('contextmenu', event => event.preventDefault());

$('#updateformEvent').submit(function(event) {
	event.preventDefault();
	var formData = new FormData(this);
	formData.append('id', $("#id").val());
	formData.append('title', $("#title").val());
	formData.append('title_id', $("#title_id").val());
	formData.append('category', $("#category").val());
	formData.append('content', CKEDITOR.instances.content.getData());
	formData.append('content_id', CKEDITOR.instances.content_id.getData());

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
		url : toUrl+'event/updateEvent',
		data : formData,
		processData : false,
		contentType : false,
		dataType: "json",
		success : function(response){
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
					window.location.reload();
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

$('#formEvent').submit(function(event) {
	event.preventDefault();
	var formData = new FormData(this);
	formData.append('title', $("#title").val());
	formData.append('title_id', $("#title_id").val());
	formData.append('category', $("#category").val());
	formData.append('content', CKEDITOR.instances.content.getData());
	formData.append('content_id', CKEDITOR.instances.content_id.getData());

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
		url : toUrl+'event/addEvent',
		data : formData,
		processData : false,
		contentType : false,
		dataType: "json",
		success : function(response){
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
					window.location.reload();
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

$('#updateSocial').submit(function(event) {
    event.preventDefault();
	var form = $('#updateSocial');

	$.ajax({
		type : 'POST',
		url  : toUrl+"footer/updateSocial",
		data : form.serialize(),
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
					window.location.reload();
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

$('#formProduct').submit(function(event) {
	event.preventDefault();
	var formData = new FormData(this);
	formData.append('title', $("#title").val());
	formData.append('title_id', $("#title_id").val());
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
		url : toUrl+'product/addProduct',
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
					window.location.href=toUrl+'product';
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

$('#formCategory').submit(function(event) {
	event.preventDefault();
	var formData = new FormData(this);
	formData.append('title', $("#title").val());
	formData.append('title_id', $("#title_id").val());
	formData.append('subtitle', $("#subtitle").val());
	formData.append('subtitle_id', $("#subtitle_id").val());
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
		url : toUrl+'home/addCategory',
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

$("#updateProduct").submit(function(event) {
	event.preventDefault();
	var formData = new FormData(this);
	formData.append('id', $("#id").val());
	formData.append('title', $("#title").val());
	formData.append('title_id', $("#title_id").val());
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
		url : toUrl+'product/updateProduct',
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
					window.location.reload();
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

$('#editCategory').submit(function(event) {
	event.preventDefault();
	var formData = new FormData(this);
	formData.append('id', $("#id").val());
	formData.append('title', $("#title").val());
	formData.append('title_id', $("#title_id").val());
	formData.append('subtitle', $("#subtitle").val());
	formData.append('subtitle_id', $("#subtitle_id").val());
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
		url : toUrl+'home/updateCategory',
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
					window.location.reload();
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

function confirmDeleteEvent(id = null){				
	swal({
		title: "Are You Sure ?",
		text: "event Delete Permanently",
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
					url  : toUrl+"event/deleteEvent",
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
								window.location.reload();
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
					url  : toUrl+"footer/deleteMedia",
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
								window.location.href=toUrl+'footer';
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

function confirmDeleteCategory(id = null){				
	swal({
		title: "Are You Sure ?",
		text: "Category Delete Permanently",
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
					url  : toUrl+"home/deleteCategory",
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

function confirmDeleteProduct(id = null){				
	swal({
		title: "Are You Sure ?",
		text: "Product Delete Permanently",
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
					url  : toUrl+"product/deleteProduct",
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
								window.location.href=toUrl+'product';
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

$('#form-upload').submit(function(event) {
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
		url : toUrl+'footer/uploadImage',
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
					window.location.href=toUrl+'footer';
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
		url  : toUrl+"footer/updateAbout",
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
					window.location.href=toUrl+'footer';
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