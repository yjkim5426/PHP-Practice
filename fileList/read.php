<?php 
	require('lib/print.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>read</title>
</head>
<body>
<a href="index.php"><h1>List</h1></a>

<ol>
	<?php
		printList();
	?>
</ol>

<a href="create.php"><input type="button" value="Create"></a>
<?php echo '<a href="delete_process.php?id=' .$_GET['id']; ?>"><input type="button" value="Delete"></a>
<?php echo '<a href="edit.php?id=' .$_GET['id']; ?>"><input type="button" value="Edit"></a>

<h2>
	<?php
		printTitle();
	?>
</h2>

<p>
	<?php
		printDescription();
	?>
</p>

</body>
</html>