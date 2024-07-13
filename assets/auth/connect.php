<?php
    $localhost = 'localhost';
    $root = 'root';
    $db_pass = '';
    $db_name = 'users';
    $connection = mysqli_connect($localhost,$root,$db_pass,$db_name);
    if (!$connection) {
        echo "please chack your query..".mysqli_connect_error();
    }