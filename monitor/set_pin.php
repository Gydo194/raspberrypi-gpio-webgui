<?php
    $mode = $_GET["mode"];
    $pin = $_GET["pin"];
    $value = $_GET["value"];

    $db = explode(",", file_get_contents("./db.csv"));
    $db_write = fopen("./db.csv", "w");
    
    $db[$pin] = $value;
    
    $database = implode(",", $db);
    
    
    fwrite($db_write, $database);
?>
