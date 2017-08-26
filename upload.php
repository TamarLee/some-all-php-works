<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);


// სურათის ვალიდურობის შემოწმება.


if(isset($_POST["submit"])){
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false){
		echo "File is an image - ".$check["mime"].".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
}


// შემოწმება იმისა, ფაილი უკვე ხომ არ არსებობს ბაზაში.

if(file_exists($target_file)){
	echo "File exists";
	$uploadOk = 0;
}


// ფაილის ზომის შემოწმება.

if($_FILES["fileToUpload"]["size"] > 500000){
	echo "File is too large";
	$uploadOk = 0;
}


// ფაილის ტიპის შემოწმება.

if($imageFileType != "jpg" &&
	$imageFileType != "png" &&
	$imageFileType != "jpeg" &&
	$imageFileType != "gif"){

	echo "only jpg, png, jpeg and gif are allowed";
	$uploadOk = 0;
}


// $uploadOk -ის შემოწმება.

if($uploadOk == 0){
	echo "Sorry, File is not uploaded";
} else {
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
		echo "The file ". basename($_FILES["fileToUpload"]["name"])."has been uploaded";
	} else {
		echo "Something's wrong.";
	}
}



?>