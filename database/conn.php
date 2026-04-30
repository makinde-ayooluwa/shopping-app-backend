<?php
include "./autoload.php";
$host = $_SERVER['HTTP_HOST'];
$dbClass = new Database($host);
$pdo = $dbClass->connect();