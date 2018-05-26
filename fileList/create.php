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
<input type="text" name="" placeholder="title">
<Br>
<textarea placeholder="insert the contents"></textarea>
<br>
<input type="button" value="Save">
<a href="index.php"><input type="button" value="Cancel"></a>

</body>
</html>