<?php
	$database = explode(",", file_get_contents("./descdb.txt"));
	$dbindex = $_GET["index"];
	echo $database[$dbindex];
?>
