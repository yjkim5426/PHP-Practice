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
			echo '<li><a href="read.php?id=' .$fileName['basename']. '">' .$fileName['filename'].'</a></li>';
		}
	?>
</ol>

<a href="create.php"><input type="button" value="Create"></a>
<?php echo '<a href="delete_process.php?id=' .$_GET['id']; ?>"><input type="button" value="Delete"></a>
<?php echo '<a href="edit.php?id=' .$_GET['id']; ?>"><input type="button" value="Edit"></a>

<h2>
	<?php
		$fileName = pathinfo($_GET['id']);
		echo $fileName['filename'];
	?>
</h2>

<p>
<?php
	$content = file_get_contents('data/'.$_GET['id']);
	echo $content;
?>
</p>

</body>
</html>