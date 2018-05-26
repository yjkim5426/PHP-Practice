<?php 
	require('lib/print.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>create</title>
</head>
<body>
<a href="index.php"><h1>List</h1></a>

<ol>
	<?php
		printList();
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