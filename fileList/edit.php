<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
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

<form action="update_process.php" method="POST">
	<?php echo '<input type="hidden" name="Original_title" value="' .$_GET['id']. '">' ?>
	<?php
		$fileName = pathinfo($_GET['id']);

		echo '<input type="text" name="title" value="' .$fileName['filename']. '">';
	?>
	<Br>

	<?php
		$content = file_get_contents('data/'.$_GET['id']);

		echo '<textarea name="description">' .$content. '</textarea>';
	?>
	<br>

	<input type="submit" value="Update">
	<a href="index.php"><input type="button" value="Cancel"></a>
</form>
</body>
</html>
