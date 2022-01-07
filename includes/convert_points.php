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
        $amount = $points * 0.0002;
        if ($userMembership == "VIP"){
            $amount = $points * 0.001;
        }
        $update = $getFromPoints->convertPoints($points,$amount,$user_id);
        echo htmlspecialchars($points . " Points Converted For $" . $amount);
    }
}
    }else{
        header("Location: logout.php");
    }