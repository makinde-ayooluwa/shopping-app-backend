<?php
class User{
    public function __construct()
    {
        
    }
    public function signup($pdo,$data){
        $query = "INSERT INTO users(fullname,user_id,email,phone,address,picture,password,country,currency,joined_on) VALUES (:fullname,:user_id,:email,:phone,:address,:picture,:password,:country,:currency)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":fullname",$data["fullname"]);
        $stmt->execute();
    }
    public function uploadPicture($pdo, $picture){
        $target_dir = "../uploads/images/";
        $target_file = $target_dir . basename($picture["name"]);
        move_uploaded_file($target_dir, $target_file);
    }
}