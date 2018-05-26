<?php
	function printList()
	{
		// scan file-names from data folder
		$directory = 'data';
		
		// rid of the dots
		$scanned_directory = array_diff(scandir($directory), array('..', '.'));

		// count the files
		$arraySize = sizeof($scanned_directory);

		// make a list from scaned files
		for ($i=2; $i<=$arraySize+1 ; $i++) {
			$fileName = pathinfo($scanned_directory[$i]);
			echo '<li><a href="read.php?id=' .$fileName['basename']. '">' .$fileName['filename'].'</a></li>';
		}
	}

	function printTitle()
	{
		$fileName = pathinfo($_GET['id']);
		echo $fileName['filename'];
	}

	function printDescription()
	{
		$content = file_get_contents('data/'.$_GET['id']);
		echo $content;
	}
?>