<?php

$points = $userInfo['points'];
$balance = $userInfo['balance'];


$Referrals = $getFromUser->getTotalReferrals($user_id);
$totalReferrals = $Referrals['totalRefs'];
$Investments = $getFromUser->getTotalUserInvestments($user_id);
$totalInvestments = $Investments['total'];
?>
<div class="container-fluid p-1">
    <!--Success or error message for converting points -->
    <div id="convertPointsMessageSuccessOr" class="container"></div>
    <img src="https://cdn.pixabay.com/photo/2015/11/23/10/57/banner-1058146__480.jpg" width="100%" height="150px" alt="header img">
</div>
<div class="container" style="margin-top: -50px;">
    <div class="row">
        <div class="col-12">
            <div class="card bg-transparent card-body p-0 border-0">
                <div class="row d-flex justify-content-between">
                    <!--Avatar -->
                    <div class="col-auto mt-4 mt-md-0">
                        <div class="avatar">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" alt="Avatar"
                                 class="avatar-img rounded-circle border border-white border-3 shadow"
                                 width="128px" height="128px">
                        </div>
                    </div>
                    <!--Profile Info -->
                    <div class="col d-md-flex justify-content-between align-items-center mt-4">
                        <div>
                            <h1 class="my-1 fs-4 fw-bold">
                                <?php echo htmlspecialchars($first_name . " " . $last_name);?>
                                <i class="bi bi-patch-check-fill text-info small"></i>
                            </h1>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item h6 fw-light me-3 mb-1">
                                    <i class="bi bi-gem"></i>
                                    <span id="membership"><?php echo htmlspecialchars($membership);?></span> Member
                                </li>
                                <li class="list-inline-item h6 fw-light me-3 mb-1">
                                    <i class="bi bi-people text-orange me-2"></i>
                                    <?php echo htmlspecialchars($totalReferrals);?> Referrals
                                </li>
                                <li class="list-inline-item h6 fw-light me-3 mb-1">
                                    <i class="bi bi-clipboard-data text-purple me-2"></i>
                                    <?php echo htmlspecialchars($totalInvestments);?> Projects
                                </li>
                            </ul>
                        </div>
                        <!-- Add New Investment Button -->
                        <div class="d-flex align-items-center mt-2 mt-md-0">
                            <a href="send_idea.php" class="btn btn-warning bg-gradient mb-0 shadow">Send Idea & Earn <i class="bi bi-coin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>