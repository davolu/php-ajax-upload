 <?php
 
			 
// Check for errors
if($_FILES['client_id_image']['error'] > 0){
    die('An error ocurred when uploading.');
}

$uploadOk=1;


$theFILE =  trim(addslashes($_FILES['client_id_image']['name'] ));
$theFILE = str_replace(' ','_',$theFILE);
$target_file = "uploads/".$theFILE;

 $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		if( strtolower($imageFileType) != "jpg" && strtolower($imageFileType) != "png" && strtolower($imageFileType) != "jpeg"
					&& strtolower($imageFileType) != "gif"   ) {
						//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						// echo"0";
						$uploadOk = 0;
					}
					

// Upload file
if(!move_uploaded_file($_FILES['client_id_image']['tmp_name'], 'uploads/' . $theFILE      )){
    echo "0";
	die('Error uploading file - check destination is writeable.');
	
}

 


$filePath = "uploads/".$_FILES['client_id_image']['name'];
 
 if($uploadOk !=0)
 {
 echo $filePath;
 }
 else
 {
	 echo "0";
 }
  

 ?>