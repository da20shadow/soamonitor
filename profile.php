<?php
require_once('core/init.php');

$title = "Member Profile - SOAMonitor.com";
$pageId = "public_profile";
include ('includes/header.php');

//if $_GET['profile_id]
if (isset($_GET['profile_id'])){

$profile_id = $_GET['profile_id'];

$profile_id = $getFromFunc->checkInput($profile_id);
$userInfo = $getFromUser->checkIfUserIDExists($profile_id);

if ($userInfo){
    $userInfo = $getFromUser->getUserInfo($profile_id);
    $username = $userInfo['username'];
    $first_name = $userInfo['first_name'] ? : "n/a";
    $last_name = $userInfo['last_name'] ? : "n/a";
    $membership = $userInfo['membership'];
    $email = $userInfo['email'];
    $points = $userInfo['points'];
    $facebook = $userInfo['facebook'] ? : "#";
    $telegram = $userInfo['telegram'] ? : "#";
    $pinterest = $userInfo['pinterest'] ? : "#";
    $instagram = $userInfo['instagram'] ? : "#";

?>
<div class="container" style="margin-top:55px;">
    <div class="row">
        <div class="col-4">
            <div class="card text-center">
                <!-- card body start -->
                <div class="card-body">
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle avatar-lg img-thumbnail"
                         alt="profile-image" width="128px" height="128px">

                    <h4 class="mb-0 mt-2"><?php echo htmlspecialchars($first_name ." ".$last_name); ?></h4>
                    <p class="text-muted mt-2"><?php echo htmlspecialchars($membership); ?></p>

                    <button type="button" class="btn btn-success bg-gradiant btn-sm mb-2">Follow</button>
                    <button type="button" class="btn btn-danger bg-gradiant btn-sm mb-2">Message</button>

                    <div class="text-start mt-3">
                        <h4 class="text-uppercase">About Me :</h4>
                        <p class="text-muted mb-3">
                            Hi I'm John Doe,ala bala purtukala leshta nica tam panica :D
                        </p>
                        <p class="text-muted mb-2">
                            <strong>Full Name :</strong>
                            <span class="ms-2"><?php echo htmlspecialchars($first_name ." ".$last_name); ?></span>
                        </p>

                        <p class="text-muted mb-2">
                            <strong>Email :</strong>
                            <span class="ms-2 "><?php echo htmlspecialchars($email); ?></span>
                        </p>

                        <p class="text-muted mb-1">
                            <strong>Location :</strong>
                            <span class="ms-2">Bulgaria</span>
                        </p>
                    </div>

                    <ul class="list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a href="" class="text-primary"><i class="bi bi-facebook me-2 fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="text-danger"><i class="bi bi-pinterest me-2 fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="text-info"><i class="bi bi-telegram me-2 fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="text-secondary"><i class="bi bi-instagram me-2 fs-3"></i></a>
                        </li>
                    </ul>
                </div> <!-- end card-body -->
            </div>
        </div>
        <div class="col-8">
            <h2>Member Activity <i class="bi bi-activity ms-2"></i></h2>
            <!--Stat -->
            <div class="row">
                <div class="col shadow p-3 m-1 bg-body rounded text-center">
                    <p class="fs-5 fw-bold">9</p>
                    Blog Posts
                </div>
                <div class="col shadow p-3 m-1 bg-body rounded text-center">
                    <p class="fs-5 fw-bold">9</p>
                    Blog Comments
                </div>
                <div class="col shadow p-3 m-1 bg-body rounded text-center">
                    <p class="fs-5 fw-bold">9</p>
                    Liked
                </div>
                <div class="col shadow p-3 m-1 bg-body rounded text-center">
                    <p class="fs-5 fw-bold">9</p>
                    Received Likes
                </div>
                <div class="col shadow p-3 m-1 bg-body rounded text-center">
                    <p class="fs-5 fw-bold">9</p>
                    Something Else
                </div>
            </div>
            <!-- Recent Activity -->
            <div class="row mt-3">
                <h4>Activity:</h4>
                <p>Comment ala bala ala bala ala bala ala bala .... - [in Post Title] - [1 week ago.]</p>
                <p>Comment ala bala ala bala ala bala ala bala .... - [in Post Title] - [1 week ago.]</p>
                <p>Comment ala bala ala bala ala bala ala bala .... - [in Post Title] - [1 week ago.]</p>
                <p>Comment ala bala ala bala ala bala ala bala .... - [in Post Title] - [1 week ago.]</p>
            </div>
        </div>
    </div>
</div>
<?php
}else{?>
    <h2 class="text-center text-danger m-5">
        Such Profile Doesn't Exist!
    </h2>
<?php
}
}else{?>
    <h2 class="text-center text-danger m-5">
        Such Profile Doesn't Exist!
    </h2>
<?php
}
include("includes/footer.php");
?>