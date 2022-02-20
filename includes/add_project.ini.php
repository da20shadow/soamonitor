<?php
require_once("../core/init.php");
$errMsg = ['project'=>'','deposit'=>''];

if(isset($_POST['project']) && isset($_POST['deposit'])){

    $projectName = $getFromFunc->checkInput($_POST["project"]);
    $deposit = $getFromFunc->checkInput($_POST["deposit"]);
    $user_id = $getFromFunc->checkInput($_SESSION["user_id"]);

    $exist = $getFromProject->checkIfProjectExist($projectName,$user_id);

    if (empty($projectName)){
        echo htmlspecialchars("Please Add Project Name!");
    }else if ($exist){
        echo htmlspecialchars("You have added this project already!");
    }else if ($projectName == ""){
        echo htmlspecialchars("Please Add Project Name empty string not allowed!");
    }else if (empty($deposit)){
        echo htmlspecialchars("Enter Deposit!");
    }else if ($deposit == ""){
        echo htmlspecialchars("Enter Deposit!");
    }else if ($deposit == 0){
        echo htmlspecialchars("Enter Deposit!");
    }else if (strlen($projectName) > 45){
        echo htmlspecialchars("Project Name can be max 45 letters!");
    }else if (strlen($deposit) > 11){
        echo htmlspecialchars("Deposit can't be more than 11 characters!");
    }else if(!preg_match('/^[a-zA-Z0-9 ]+$/',$projectName)){
        echo htmlspecialchars("Project name can contains only letters and whitespace!");
    }else if(!preg_match('/^[0-9.,]+$/',$deposit)){
        echo htmlspecialchars("Enter Valid Deposit Amount!");
    }else{
        $deposit = round($deposit, 2);

        $addedProject = $getFromProject->addInvestmentProject($projectName,$deposit,$user_id);
        if ($addedProject){ ?>
            <h4 class="text-center text-success">Successfully Added <strong><?php echo htmlspecialchars($projectName); ?></strong></h4>
            <h4 class="text-center text-success">With Investment: <strong>$<?php echo htmlspecialchars($deposit); ?></strong></h4>
    <?php
        }else{?>
    <h4 class="text-center text-danger">Error! Try Again!</h4>
<?php
        }
    }
}
?>