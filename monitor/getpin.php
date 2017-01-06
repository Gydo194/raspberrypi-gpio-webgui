<?php
    $pin = $_GET["pin"];
    
    $db = explode(",", file_get_contents("./db.csv"));
    echo $db[$pin];
?>
