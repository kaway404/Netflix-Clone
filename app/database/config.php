<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'netflix';
    $mysqli = new mysqli();
    $mysqli->connect($host, $user, $password, $database);
    if (mysqli_connect_errno()) {
        exit('Connect failed: '. mysqli_connect_error());
    }
?>