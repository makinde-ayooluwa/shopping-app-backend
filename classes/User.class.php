<?php
class User extends Database{
    public function __construct()
    {
        
    }
    public function signup($pdo,$data){
        $query = "INSERT INTO users(fullname,user_id,email,phone,address,picture,password,country,currency,joined_on) VALUES (:fullname,:user_id,:email,:phone)";
    }
}