<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$request = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

if($uri[1] === "posts"){
    switch($request){
        case "GET":
            echo "this is post";
            break;
        case "POST":
            echo "you tried to add new post";
            break;
        case "DELETE":
            echo 'you deleted post';
            break;
        case "PUT":
            echo "you edited post";
            break;
    }
}
else{
    header("HTTP/1.1 404 Not Found");
}
