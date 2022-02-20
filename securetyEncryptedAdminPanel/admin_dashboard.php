<?php
require_once('../core/init.php');
$title ="";
if (isset($_SESSION['username'])){
    $user_id = $_SESSION['user_id'];
    $user_id = $getFromFunc->checkInput($user_id);
    $userInfo = $getFromUser->getUserInfo($user_id);

    $membership = $userInfo['membership'];

    if ($membership == "Admin"){

        include "../template/admin_panel.php";

    }else if ($membership == "Moderator"){

        include "../template/moderator_panel.php";

    }else if ($membership == "VIP"){

        include "../template/author_panel.php";

    }else {
        header("Location: login.php");
    }
}