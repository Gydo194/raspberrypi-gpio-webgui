<?php
    $file = fopen("./switchdb.csv", "w");
    
    
    
    
    
    fwrite($file, $_POST["csv"]);
    fclose($file);
    print_r($_POST["csv"]);
?>