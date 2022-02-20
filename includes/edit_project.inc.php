<?php
require_once("../core/init.php");

if(isset($_POST['project_id']) && isset($_POST['option']) && isset($_POST['amount']) &&
    !empty($_POST['project_id']) && !empty($_POST['option']) && !empty($_POST['amount'])){

    $user_id = $getFromFunc->checkInput($_SESSION['user_id']);
    $project_id = $getFromFunc->checkInput($_POST['project_id']);

    $project_id = preg_replace('/edit_project_/','',$project_id);

    $amount = $getFromFunc->checkInput($_POST['amount']);

    $action = $getFromFunc->checkInput($_POST['option']);

    $checkProject = $getFromProject->getInvestmentId($project_id, $user_id);

    if (!$checkProject){
        echo htmlspecialchars("No such project ID $project_id from this user id $user_id!");
    }else if (empty($amount)){
        echo htmlspecialchars("Not added amount!");
    }else if ($amount < 0.01){
        echo htmlspecialchars("Amount can't be less than $0.01!");
    }else if ($amount == ""){
        echo htmlspecialchars("Enter amount!");
    }else if ($project_id == ""){
        echo htmlspecialchars("Project with this ID Not exist!");
    }else if ($project_id < 1){
        echo htmlspecialchars("Project with this ID Not exist!");
    }else if (empty($project_id)){
        echo htmlspecialchars("Project with this ID Not exist!");
    }else if (empty($action)){
        echo htmlspecialchars("Not selected action!");
    }else if ($action == ""){
        echo htmlspecialchars("Not selected action!");
    }else if ($action < 1){
        echo htmlspecialchars("Not selected action!");
    }else if (!preg_match('/^[0-9]+$/',$user_id)){
        echo htmlspecialchars("Invalid Investor ID!");
    }else if (!preg_match('/^[0-9,.]+$/',$amount)){
        echo htmlspecialchars("Invalid Amount!");
    }else if (!preg_match('/^[a-z0-9_]+$/',$project_id)){
        echo htmlspecialchars("Invalid Project ID!");
    }else if (!preg_match('/^[a-zA-Z]+$/',$action)){
        echo htmlspecialchars("Invalid Action!");
    }else{

        $amount = round($amount, 2);

        $updateProject = $getFromProject->updateProject($action,$project_id,$amount,$user_id);
        if ($updateProject){
            echo htmlspecialchars("Successfully Updated!");
            echo "<br>";
            echo htmlspecialchars("Action: " . $action);
            echo "<br>";
            echo htmlspecialchars("Amount: $" . $amount);
        }else{
            echo htmlspecialchars("ERROR! Please, Try Again.");
        }
    }
}