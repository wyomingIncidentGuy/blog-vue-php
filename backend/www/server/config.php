<?php
    $host = 'db';
    $db = 'my_database';
    $user = 'root';
    $password = 'root_password';

    $link = new mysqli($host, $user, $password, $db);

    if($link->connect_error){
        die('connection to database failed');
    }