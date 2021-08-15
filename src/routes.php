<?php
	include_once('./src/pdo/Connection.php');
	include_once('./src/models/Cult.php');

	$method = $_SERVER['REQUEST_METHOD'];


	if($method === 'GET') {
		$cult = new Cult();

		$cults = $cult->getCults();


		echo(json_encode($cults));
	}

	if ($method === 'POST') {
		
		$title = $_POST['title'];
		$data = $_POST['data'];
		$hour = $_POST['hour'];
		$file = $_FILES['file'];
		
		$target_file = './uploads/' . basename($file['name']);
		
		if (move_uploaded_file($file["tmp_name"], $target_file)) {
			echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	
		// $cult = new Cult();
		// $newCult = $cult->createCult($title, $data, $hour, $file);
		
		// echo($newCult);
	}