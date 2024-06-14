<?php
include 'server/config.php';
include_once 'server/PostController.php';


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$data = [
    'id' => '4fae_11dfeq12dsxc-gh',
    'heading' => 'g',
    'theme' => 'g',
    'date' => '2024-06-15',
    'body' => 'g',
];

$request = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

if($uri[1] === "posts"){
    switch($request){
        case "GET":
            $controller = new PostController($link);
            $controller->getPosts();
            break;
        case "POST":
            $controller = new PostController($link);
            $controller->addPost($data['id'], $data['heading'], $data['theme'], $data['date'], $data['body']);
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
