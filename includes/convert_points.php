<?php
require_once("../core/init.php");

if (isset($_POST['points'])){

$points = $getFromFunc->checkInput($_POST["points"]);
$user_id = $getFromFunc->checkInput($_SESSION['user_id']);

$userInfo = $getFromUser->getUserInfo($user_id);
if ($userInfo){
    $availablePoints = $userInfo['points'];
    $availableBalance = $userInfo['balance'];
    $userMembership = $userInfo['membership'];

    if ($availablePoints >= $points){
        if ($userMembership == "VIP"){
            $amount = $points * 0.001;
        }else{
            $amount = $points * 0.0002;
        }
        $update = $getFromPoints->convertPoints($points,$amount,$user_id);
    }
}
    }else{
        header("Location: logout.php");
    }