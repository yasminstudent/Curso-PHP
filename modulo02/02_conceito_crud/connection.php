<?php
    $db_name = "cursophp";
    $db_host = "127.0.0.1"; //ou localhost
    $db_user = "root";
    $db_password = "bcd127";
    $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);
?>