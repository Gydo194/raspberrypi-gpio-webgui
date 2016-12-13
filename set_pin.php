<?php
	$pin = $_GET[pin];
	$value = $_GET[value];
	$mode = $_GET[mode];
	if($value == "") {
		if($mode != "in") {
			die("value argument required in out mode");
		}
	}

	if($mode == "in") {
		$command = "gpio mode " . $pin . " in";
		echo $command;
		system($command);
		return("0");
	}






	$init_command = "gpio mode " . $pin . " out";
	echo($init_command);
	$command = "gpio write " . $pin . " " . $value;
	echo("<br>");
	echo($command);
	system($command);

?>
