<?php
require_once("../core/init.php");

if(isset($_POST['project_id'])){
    $user_id = $getFromFunc->checkInput($_SESSION['user_id']);
    $project_id = $getFromFunc->checkInput($_POST['project_id']);

    $projectIsFor = "";
    if (preg_match('/delete_project_/',$project_id)){
        $projectIsFor = "delete";
        $project_id = preg_replace('/delete_project_/','',$project_id);

    }else if (preg_match('/edit_project_/',$project_id)){
        $projectIsFor = "update";
        $project_id = preg_replace('/edit_project_/','',$project_id);
    }

    if (!preg_match('/^[0-9]+$/',$project_id)){
        echo htmlspecialchars("Invalid Project ID");
    }else if (!preg_match('/^[0-9]+$/',$user_id)){
        echo htmlspecialchars("Invalid User ID");
    }else{

        $confirmProjectAndInvestorId = $getFromProject->getInvestmentId($project_id,$user_id);

        if ($confirmProjectAndInvestorId){

            $projectInfo = $getFromProject->getProjectInfo($project_id,$user_id);

            if($projectIsFor == "delete"){
                echo htmlspecialchars("You are about to delete " . $projectInfo['investment_name']);
            }else if($projectIsFor == "update"){
                echo htmlspecialchars($projectInfo['investment_name']);
            }
        }
    }
}