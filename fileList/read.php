<!DOCTYPE html>
<html>
<head>
	<title>read</title>
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
<a href="create.php"><input type="button" value="Create"></a>
<a href="delete.php"><input type="button" value="Delete"></a>
<a href="edit.php"><input type="button" value="Edit"></a>

<h2>read test title</h2>
<p>read test contents</p>
</body>
</html>