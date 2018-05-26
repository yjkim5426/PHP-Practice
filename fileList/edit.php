<?php 
	require('lib/print.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
<a href="index.php"><h1>List</h1></a>
<ol>
	<?php
		printList();
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
