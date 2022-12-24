<?php
  
    // Open your file in read mode
    $input = fopen("../index-php.html", "r");
  
    // Display a line of the file until the end 
    while(!feof($input)) {
  
        // Display each line
        echo fgets($input). " ";
    }
?>