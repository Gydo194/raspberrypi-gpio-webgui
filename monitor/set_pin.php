<?php
	$pin = $_GET[pin];
	$value = $_GET[value];
	$pinmode = $_GET[mode];
	if($value == "") {
		if($pinmode != "in") {
			die("value argument required in out mode");
		}
	}

	if($pinmode == "in") {
		$command = "gpio mode " . $pin . " in";
		echo $command;
		system($command);
		return("0");
	}






	$init_command = "gpio mode " . $pin . " out";
	echo($init_command);
	$command = "gpio -g write " . $pin . " " . $value;
	echo("<br>");
	echo($command);
	system($command);

?>
