<?php 
	require('lib/print.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<a href="index.php"><h1>List</h1></a>

<ol>
	<?php
		printList();
	?>
</ol>

<a href="create.php"><input type="button" value="Create"></a>
	
</body>
</html>