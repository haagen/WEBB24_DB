<?php

    $host = 'mysql';     
    $port = 3306;
    $username = 'root';
    $password = 'rootpassword';
    $database = 'Football';

    $conn = new mysqli($host, $username, $password, $database, $port);

?>