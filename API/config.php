<?php
    $localhost= "localhost";
    $username= "bowe1mu6nr9x";
    $password="cEn|k6WlrY9";
    $dbname= "news_admindb";
  
    $conn= mysqli_connect($localhost, $username, $password, $dbname);

    if(!isset($conn)){
        echo "not connect";
    }
    

?>