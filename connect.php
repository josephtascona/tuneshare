<?php
    $dsn = 'mysql:host=localhost;dbname=tuneshare';
    $username = 'root';
    $password = 'root'; 
    $db = new PDO($dsn, $username, $password);
    //set error mode to exception 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>