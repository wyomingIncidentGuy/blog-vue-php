<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

    ini_set('always_populate_raw_post_data', '-1');
    ini_set('allow_url_fopen', '1');

    $link = mysqli_connect('db', 'root', 'root_password', 'my_database', '3306');
    $result = mysqli_query($link, 'SELECT * FROM test_table WHERE id=1');
    echo json_encode($result);
    mysqli_close($link);