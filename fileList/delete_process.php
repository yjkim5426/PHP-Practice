<?php 
	unlink('data/' .$_GET['id']);

	// go to index page
	header("Location: index.php");
 ?>
