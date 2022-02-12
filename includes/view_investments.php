<?php
require_once("../core/init.php");
$user_id = $_SESSION['user_id'];

$projectList = $getFromProject->getTotalUserInvestments($user_id);
    foreach ($projectList as $project){
        $profitLoss = $project['investment_withdrawal'] - $project['investment_deposit'];
        ?>
    <tr class="align-items-center">
        <td><?php echo htmlspecialchars($project['investment_name']);?></td>
        <td>$<?php echo htmlspecialchars($project['investment_deposit']);?></td>
        <td>$<?php echo htmlspecialchars($project['investment_withdrawal']);?></td>
        <td class="<?php if($profitLoss < 0){echo htmlspecialchars('text-danger');}else{echo htmlspecialchars('text-success');} ?> ">$<?php echo htmlspecialchars($profitLoss);?></td>
        <td><?php echo htmlspecialchars($project['investment_added']);?></td>
        <td>
            <button id="<?php echo htmlspecialchars('edit_project_' . $project['investment_id']);?>" class="btn btn-primary bg-gradient btn-sm" data-bs-toggle="modal" data-bs-target="#editProject">Edit</button>
            <button id="<?php echo htmlspecialchars('delete_project_' . $project['investment_id']);?>" class="btn btn-danger bg-gradient btn-sm" data-bs-toggle="modal" data-bs-target="#deleteProject">Delete</button>
        </td>
    </tr>
<?php }?>
