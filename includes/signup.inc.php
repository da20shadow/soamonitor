<?php
$username = $email = $password = "";
$message = ['username'=>'',
    'email'=>'',
    'password'=>'Enter Password between 8 - 45 characters!',
    're_password'=>'Passwords must match!',
    'other'=>'',
    'success'=>''];

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])
    && isset($_POST['re-password']) && isset($_POST['terms'])){

    $username = $getFromFunc->checkInput($_POST['username']);
    $email = $getFromFunc->checkInput($_POST['email']);
    $password = $getFromFunc->checkInput($_POST['password']);
    $new_password = md5($password);
    $re_password = md5($getFromFunc->checkInput($_POST['re-password']));
    $terms = $_POST['terms'];

    if ($username == ""){
        $message['username'] = "Please Enter Username!";
        echo $message['username'];
    }else if(!preg_match("/^([a-zA-Z0-9_]{8,45})$/",$username)){
        $message['username'] = "Username must contains only letters, digits and underscores! (min 8 - max 45 symbols!)";

    }else if ($email == ""){
        $message['email'] = "Please Enter Email!";
        echo $message['email'];
    }else if(!preg_match("/^([a-zA-Z0-9_.-])+@([a-zA-Z])+[.]([a-zA-Z]{2,4})+$/",$email)){
        $message['email'] = "Please Enter Valid Email!";

    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $message['email'] = "Please Enter Valid Email!";

    }else if ($password == ""){
        $message['password'] = "Please Enter Password!";

    }else if (strlen($password) < 8 || strlen($password) > 45){
        $message['password'] = "Password must be between 8 and 45 characters!";

    }else if($re_password == ""){
        $message['re_password'] = "Please Enter Password Again!";

    }else if($new_password != $re_password){
        $message['re_password'] = "Passwords do not match!";

    }else if($terms != "accepted"){
        $message['other'] = "Please accept terms!";

    }else{
        $existUsername = $getFromUser->checkIfUsernameExists($username);
        $existEmail = $getFromUser->checkIfEmailExists($email);
        if($existUsername){
            $message['username'] = "Such username already registered!";

        }else if ($existEmail){
            $message['email'] = "Such Email already registered!";

        }else {
            $regSuccess = $getFromUser->regUser($username,$email,$new_password);
            if ($regSuccess){
                $message['success'] = "Successfully registered!";
                header('refresh:2; url=../login.php');
            }else{
                $message['other'] = "An Error Occurred! Please try again!";
            }
        }
    }
}