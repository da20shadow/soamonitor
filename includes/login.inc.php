<?php
$message = ['email'=>'','password'=>'','success'=>'','error'=>''];
$email = $password = "";
if (isset($_POST['email']) && isset($_POST['password'])){
    $email = $getFromFunc->checkInput($_POST['email']);
    $password = $getFromFunc->checkInput($_POST['password']);

    if ($email == ""){
        $message['email'] = "Please Enter Email!";
    }else if (!preg_match("/^([a-zA-Z0-9_.-])+@([a-zA-Z])+[.]([a-zA-Z]{2,4})+$/",$email)){
        $message['email'] = "Please Enter VALID Email!";
    }else if($password == ""){
        $message['password'] = "Please Enter Password!";
    }else {
        $logUser = $getFromUser->login($email,$password);

        if ($logUser){
            $_SESSION['user_id'] = $logUser['id'];
            $_SESSION['username'] = $logUser['username'];

            $message['success'] = "Successfully logged in.";

            header('refresh: 2; url=account.php');
        }else{
            $message['error'] = "An Error has occurred, please try again.";
        }
    }
}