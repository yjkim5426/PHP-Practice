<!DOCTYPE html>
<html>
<head>
	<title>create</title>
</head>
<body>
<a href="index.php"><h1>List</h1></a>

<ol>
	<?php
		// scan file-names from data folder
		$directory = 'data';
		
		// rid of the dots
		$scanned_directory = array_diff(scandir($directory), array('..', '.'));

		// count the files
		$arraySize = sizeof($scanned_directory);

		// make a list from scaned files
		$fileName;
		for ($i=2; $i<=$arraySize+1 ; $i++) { 
			$fileName = pathinfo($scanned_directory[$i]);
			echo '<li>'.$fileName['filename'].'</li>';
		}
	?>
</ol>

<h2>Create a new file.</h2>

<form action='create_process.php' method="POST">
	<input type="text" name="title" placeholder="title">
	<Br>
	<textarea name="description" placeholder="insert the contents"></textarea>
	<br>

	<!-- buttons -->
	<input type="submit" value="Save">
	<a href="index.php"><input type="button" value="Cancel"></a>
</form>

</body>
</html>