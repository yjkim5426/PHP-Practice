<?php
	
	$file = $_POST['title'].'.php';
	echo 'new title is : ' .$file;
	echo '<br>';

	$originalFile = $_POST['Original_title'];
	echo 'original title is : ' .$originalFile;
	echo '<br>';

	// Open the file to get existing content
	$current = file_get_contents('data/'.$originalFile);
	echo 'Original contents is : ' .$current;
	echo '<br>';

	// Append a new person to the file
	$current = $_POST['description'];
	echo 'Current contents is : ' .$current;
	echo '<br>';

	// Write the contents back to the file
	file_put_contents('data/'.$file, $current);

	if ($originalFile != $file) {
		unlink('data/' .$originalFile);
	}

	// go to index page
	header("Location: index.php");
?>