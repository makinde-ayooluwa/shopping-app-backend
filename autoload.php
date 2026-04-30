<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-type: application/json");
spl_autoload_register("autoload");

function autoload($class_name){
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . $class_name . $extension;
    if(file_exists($fullPath)){
        include $fullPath;
    }
}

$host = $_SERVER['HTTP_HOST'];
$dbClass = new Database($host);
$userClass = new User();
$pdo = $dbClass->connect();