<?php
	$csv = explode(",", $_POST["csv"]);
	print_r($csv);
	for($i = 0; $i < 5; $i++) {
	$command = "gpio -g write " . $i . " " . $csv[$i];
	echo $command;
	echo "\n";
	system($command);
	}
	$file = fopen("./switchdb.csv", "w");
	fwrite($file, implode(",", $csv));
?>
