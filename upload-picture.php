<?php

include "autoload.php";
$data = json_decode(file_get_contents("php://input"),true);
$userClass->uploadPicture($pdo, $data["picture"]);
echo json_encode([
    "url"=>"http://localhost/shopping-app-backend/uploads/images/" . $data["picture"]["name"]
]);