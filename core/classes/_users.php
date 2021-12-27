<?php
Class User{
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function login($email, $password){
        $passwordHash = md5($password);
        $stmt = $this->pdo->prepare('SELECT `id` FROM `users` WHERE `email` = :email AND `password` = :password');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $passwordHash, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);

    }

}