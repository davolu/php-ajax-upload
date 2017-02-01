<html>
<body>



	 <input type="file" id="client_id_image"  onchange="uploadit('client_id_image')"   class="form-control" />
     <input   id="photo_link"   type="text" style="display:none;" class="form-control" />
     <span id="loading_status" style="display:none;"><img src="ajax-loader.gif"/> Uploading  </span>
  
  

	<script>
	
	
	
        function uploadit(id)
		 {
			 
			 
			 var fileInput = document.getElementById(""+id+"");
	 
		     
			 var loading_status = document.getElementById("loading_status");
			 
			 loading_status.style.display="block";
			  
			 	  if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
											} 
											else {
					 // code for IE6, IE5
					 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
												 }
													
				 xmlhttp.onreadystatechange = function() {
					 
				
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
				 {
 
								 //alert(xmlhttp.responseText);
								 
								 if(xmlhttp.responseText ==0)
								 {
									 alert("Wrong Format. Only JPG, JPEG, PNG & GIF files are allowed!");
									setTimeout( function(){loading_status.innerHTML="Uploaded! <span class='glyphicon glyphicon-ok'></span>"},1500);
								 }
								 else
								 {
									 setTimeout( function(){loading_status.innerHTML="Uploaded! <span class='glyphicon glyphicon-ok'></span>"},1500);
									 $("#photo_link").val(xmlhttp.responseText);
								 }
				}
			  			}
			 
			 
			 var formData = new FormData();
			 formData.append(id, fileInput.files[0]);
			 
 
			 
			 
	         xmlhttp.open("POST", "uploader.php");
 			 xmlhttp.send(formData);			 
			 
		 }
		 
		 
		 
		 
	
	</script>
</body>
</html>