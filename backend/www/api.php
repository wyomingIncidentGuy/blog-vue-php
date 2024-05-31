<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

ini_set('always_populate_raw_post_data', '-1');
ini_set('allow_url_fopen', '1');

echo "this is api";