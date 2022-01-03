<?php
require_once("../core/init.php");
if(isset($_POST['project_id'])){
    $project_id = $getFromFunc->checkInput($_POST['project_id']);

    $project_id = preg_replace('/delete_project_/','',$project_id);

    $user_id = $getFromFunc->checkInput($_SESSION['user_id']);

    if (!preg_match('/^[0-9]+$/',$project_id)){
        echo htmlspecialchars("Invalid Project ID");
    }else if (!preg_match('/^[0-9]+$/',$user_id)){
        echo htmlspecialchars("Invalid User ID");
    }else{
        $confirmProjectAndInvestorId = $getFromProject->getInvestmentId($project_id,$user_id);
        if ($confirmProjectAndInvestorId){
            $deleteProject = $getFromProject->deleteProjectId($project_id,$user_id);
            if ($deleteProject){
                echo htmlspecialchars("Successfully Deleted!");
            }else{
                echo htmlspecialchars("Unable to Deleted! Please, try again.");
            }
        }
    }
}