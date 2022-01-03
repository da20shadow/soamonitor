<?php
require_once("../core/init.php");
$user_id = $_SESSION['user_id'];

$projectList = $getFromProject->getTotalUserInvestments($user_id);
    foreach ($projectList as $project){?>
    <tr class="align-items-center">
        <td><?php echo htmlspecialchars($project['investment_name']);?></td>
        <td>$<?php echo htmlspecialchars($project['investment_deposit']);?></td>
        <td>$<?php echo htmlspecialchars($project['investment_withdrawal']);?></td>
        <td><?php echo htmlspecialchars($project['investment_added']);?></td>
        <td>
            <button id="<?php echo htmlspecialchars('edit_project_' . $project['investment_id']);?>" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editProject">Edit</button>
            <button id="<?php echo htmlspecialchars('delete_project_' . $project['investment_id']);?>" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteProject">Delete</button>
        </td>
    </tr>
<?php }?>
