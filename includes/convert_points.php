<?php
require_once("../core/init.php");

$content_raw = file_get_contents("php://input"); // The type
$decoded_data = json_decode($content_raw, true); // Decode json
$points = $decoded_data['points']; // get the info from the assoc array

if ($points){

$points = $getFromFunc->checkInput($points);
$user_id = $getFromFunc->checkInput($_SESSION['user_id']);

$userInfo = $getFromUser->getUserInfo($user_id);

if ($userInfo){
    $availablePoints = $userInfo['points'];
    $availableBalance = $userInfo['balance'];
    $userMembership = $userInfo['membership'];

    if($points > 100000){
        echo htmlspecialchars("Maximum 100 000 points at once!");
    }else if ($points < 100){
        echo htmlspecialchars("Minimum is 100 points!");
    }else if (!is_int(intval($points))){
        echo htmlspecialchars("Wrong value type!");
    }else{
        if (intval($availablePoints) >= intval($points) && intval($points) >= 100){

            $amount = intval($points) * 0.0002;

            if ($userMembership == "VIP"){
                $amount = intval($points) * 0.001;
            }
            $update = $getFromPoints->convertPoints($points,$amount,$user_id);
            echo htmlspecialchars($points . " Points Converted For $" . number_format($amount,3,","," "));

        }else{
            echo htmlspecialchars("Not enough points in your balance!");
        }
    }
}
    }else{
    echo htmlspecialchars("Points not Converted, Try again!");
    }