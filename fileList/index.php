<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
			echo '<li><a href="read.php?id=' .$fileName['basename']. '">' .$fileName['filename'].'</a></li>';
		}
	?>
</ol>

<li><a href="read.php?id=$fileName['basename']"></a></li>
<a href="create.php"><input type="button" value="Create"></a>
	
</body>
</html>