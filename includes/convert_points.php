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

    if (intval($availablePoints) >= intval($points) && intval($points) >= 100){

        $amount = intval($points) * 0.0002;

        if ($userMembership == "VIP"){
            $amount = intval($points) * 0.001;
        }
        $update = $getFromPoints->convertPoints($points,$amount,$user_id);
        echo htmlspecialchars($points . " Points Converted For $" . $amount);

    }else{
        echo htmlspecialchars("Not enough points in your balance!");
    }
}
    }else{
        header("Location: logout.php");
    }