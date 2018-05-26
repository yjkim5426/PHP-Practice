<?php
	$file = $_POST['title'].'.php';
	//echo $file;
	
	$current = $_POST['description'];

	// Write the contents to the file
	file_put_contents('data/'.$file, $current);

	// go to index page
	header("Location: index.php");
?>
