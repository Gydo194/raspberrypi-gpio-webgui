<?php
    $file = fopen("./switchdb.csv", "w");
    
    
    
    
    
    fwrite($file, $_GET["csv"]);
    fclose($file);
?>