<?php
Class User{
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
//Register new user
    public function regUser($username,$email,$password): bool
    {
        try {
            $sql = "INSERT INTO `users` (username, email, password)
                    VALUES (:username,:email,:password)";
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindparam(':username', $username);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':password', $password);

            $stmt->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

//Check if username exist
    public function checkIfUsernameExists($username){
        $stmt = $this->pdo->prepare('SELECT `username` FROM `users` WHERE `username` = :username');
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

//Check if user ID exist
    public function checkIfUserIDExists($user_id): bool
    {
        $stmt = $this->pdo->prepare('SELECT * FROM `users` WHERE `id` = :user_id');
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        if ($result){
            return true;
        }
        return false;
    }

//Check if email exist
    public function checkIfEmailExists($email){
        $stmt = $this->pdo->prepare('SELECT `email` FROM `users` WHERE `email` = :email');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

//Login the user
    public function login($email, $password){
        $passwordHash = md5($password);
        $stmt = $this->pdo->prepare('SELECT * FROM `users` 
                                     WHERE `email` = :email AND `password` = :password');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $passwordHash, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();

    }

//Get User Info
    public function getUserInfo($id){
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();

    }
//Get total Referrals
    public function getTotalReferrals($refer_id){
        $sql = "SELECT COUNT(username) AS totalRefs FROM users WHERE refer_id = :refer_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':refer_id', $refer_id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    //Get total Projects
    public function getTotalUserInvestments($id){
        $sql = "SELECT COUNT(investment_id) AS total FROM investments WHERE investor_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }
}