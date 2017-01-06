<?php
	$dbindex = $_GET["index"];
	$dbvalue = $_GET["value"];
	$database = explode(",", file_get_contents("./descdb.txt"));
	$db_write = fopen("./descdb.txt", "w");
	$database[$dbindex] = $dbvalue;
	
	$db_csv = implode(",", $database);
	
	echo $dbvalue;
	echo "<br>";
	//echo $database;

	fwrite($db_write, $db_csv);
	fclose($db_write);
?>
