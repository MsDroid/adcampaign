<?php
if(!empty($_FILES)){
include 'constant-inc.php';

$conn = connect();
	$product_number = $_REQUEST['media-number'];	

	$targetDir = "media/";

	$fileName = time().$ad.rand().$_FILES['file']['name'];

	$targetFile = $targetDir.$fileName;	

	if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){

		//insert file information into db table

		$conn->query("INSERT INTO cover_media (file_name, media_number) VALUES('".$fileName."','".$product_number."')");



	}

	

}

?>