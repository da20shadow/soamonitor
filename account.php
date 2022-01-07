<?php
require_once('core/init.php');

if (isset($_SESSION['username'])){
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];

    $user_id = $getFromFunc->checkInput($user_id);
    $userInfo = $getFromUser->getUserInfo($user_id);

    $first_name = $userInfo['first_name'];
    $last_name = $userInfo['last_name'];
    $membership = $userInfo['membership'];
    $email = $userInfo['email'];
    $points = $userInfo['points'];
    $balance = $userInfo['balance'];


    $Referrals = $getFromUser->getTotalReferrals($user_id);
    $totalReferrals = $Referrals['totalRefs'];
    $Investments = $getFromUser->getTotalUserInvestments($user_id);
    $totalInvestments = $Investments['total'];


$title = "Account - SOAMonitor.com";

include ('includes/header.php');
?>

<div class="container-fluid p-1">
    <!--Success or error message for converting points -->
    <div id="convertPointsMessageSuccessOr" class="container">

    </div>
</div>
<div class="container mt-4">
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
                            <a href="add_new_investment.php" class="btn btn-primary mb-0"><i class="bi bi-plus-lg"></i> Add New Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--Profile Banner END-->
<!-- Account Page Content Start -->
<section class="pt-0">
    <div class="container my-4">
        <hr class="divider">
        <div class="row">
            <!--Left Sidebar -->
            <div class="col-xl-3">
                <nav class="navbar navbar-expand-md">
                    <div class="container px-1 px-xl-2 mx-0">
                        <button class="navbar-toggler m-auto collapsed my-3 w-100 bg-light border-3 border-dark shadow" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#sideBarCollapse"
                                aria-controls="sideBarCollapse"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <i class="bi bi-list"></i>
                            Profile Menu
                        </button>
                        <div class="collapse navbar-collapse w-100 p-3 border rounded-3 bg-light shadow" id="sideBarCollapse">
                            <div class="row">
                                <div class="col-12">
                                    <a href="account.php" class="a-m nav-link border-bottom active" aria-current="page">
                                        <i class="bi bi-speedometer2 fa-fw me-2"></i>Dashboard
                                    </a>
                                </div><!--Dashboard Link END-->
                                <div class="col-12">
                                    <a href="upgrade.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-gem me-2"></i>Upgrade Account
                                    </a>
                                </div><!--Upgrade Link END-->
                                <div class="col-12">
                                    <a href="contests.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-trophy"></i> Activity Contest
                                    </a>
                                </div><!--Contest Link END-->
                                <div class="col-12">
                                    <a href="earnings.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-graph-up fa-fw me-2"></i>Earnings
                                    </a>
                                </div><!--Earnings Link END-->
                                <div class="col-12">
                                    <a href="payouts.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-wallet2 fa-fw me-2"></i>Payouts</a>
                                </div><!--Payouts Link END-->
                                <div class="col-12">
                                    <a href="my_investments.php" class="a-m nav-link border-bottom active" aria-current="page">
                                        <i class="bi bi-clipboard-data me-2"></i>My Investments</a>
                                </div><!--My Investments Link END-->
                                <div class="col-12">
                                    <a href="my_ads.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-megaphone me-2"></i>My Ads</a>
                                </div><!--My Ads Link END-->
                                <div class="col-12">
                                    <a href="affiliate_dashboard.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-people me-2"></i>My Referrals</a>
                                </div><!--Affiliate Dashboard Link END-->
                                <div class="col-12">
                                    <a href="edit_profile.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-gear fa-fw me-2"></i>Edit Profile</a>
                                </div><!--Edit Profile Link END-->
                                <div class="col-12">
                                    <a href="#" class="a-m nav-link border-bottom">
                                        <i class="bi bi-arrow-repeat me-2"></i>Subscription</a>
                                </div><!--My Subscription Link END-->
                                <div class="col-12">
                                    <a href="#" class="sign-out a-m nav-link border-bottom">
                                        <i class="bi bi-trash fa-fw me-2"></i>Delete Account</a>
                                </div><!--Delete account Link -->
                                <div class="col-12">
                                    <a href="logout.php" class="sign-out a-m nav-link border-bottom">
                                        <i class="bi bi-box-arrow-left me-2"></i>Sign Out</a>
                                </div><!--Logout Link -->
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--Main Content -->
            <div class="col-xl-9">
                <!-- Points, Account Balance Statistics -->
                <div class="row g-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="stat stat-heart d-flex justify-content-center align-items-center shadow-sm">
                            <span class="display-4">
                                <i class="bi bi-circle"></i>
                            </span>
                            <div class="ms-4 h6 fw-normal">
                                <div class="d-flex align-items-center my-2">
                                    <h4 class="mb-0 fw-bold"><?php echo htmlspecialchars($points);?></h4>
                                </div>
                                <button class="btn btn-warning btn-sm shadow-sm"
                                        data-bs-toggle="modal" data-bs-target="#convertPoints">Convert Points</button>
                            </div>
                        </div>
                    </div><!--Points Balance END-->
                    <div class="col-sm-6 col-lg-4">
                        <div class="stat stat-reviews d-flex justify-content-center align-items-center
            shadow-sm">
                            <span class="display-4">
                                <i class="bi bi-cash-coin"></i>
                            </span>
                            <div class="ms-4 h6 fw-normal">
                                <div class="d-flex align-items-center my-2">
                                    <h4 class="mb-0 fw-bold">$<?php echo htmlspecialchars($balance);?></h4>
                                </div>
                                <h5>Account Balance</h5>
                            </div>
                        </div>
                    </div><!--Account Balance-->
                    <div class="col-sm-6 col-lg-4">
                        <div class="stat stat-members d-flex justify-content-center align-items-center
            shadow-sm">
                            <span class="display-4">
                                <i class="bi bi-people"></i>
                            </span>
                            <div class="ms-4 h6 fw-normal">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0 fw-bold"><?php echo htmlspecialchars($totalReferrals);?></h4>
                                </div>
                                <h5>Referrals</h5>
                            </div>
                        </div>
                    </div><!--Total Referrals-->
                </div>
                <!-- Points chart & points info -->
                <div class="row mt-5">

                    <div class="col-12">

                        <div class="card card-body bg-transparent border p-4 h-100">

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            How To Earn Coins?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            How Much Are 1000 Coins Worth?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            What is Тhe Minimum Amount of Points For Converting To USD?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                            </div><!--Short Points info END-->

                            <div class="card text-center mt-4">
                                <div class="card-header">
                                    Featured Space
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Special title treatment
                                    </h4>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                <div class="card-footer text-muted"><small>Get it for $13/Week</small></div>
                            </div><!--The Ad END-->

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- Convert Points Modal -->
    <div class="modal fade" id="convertPoints" tabindex="-1"
         aria-labelledby="convertPoints" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Convert Points To Cash</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h4 class="text-center text-success" id="convertedPointsSuccess"></h4>

                    <div id="convertPointsForm"
                          class="needs-validation was-validated">
                        <span class="form-control text-center border-bottom-0">You have: <?php echo htmlspecialchars($points);?> Points</span>
                        <div class="m-2">
                            <label class="form-label" for="points">Points</label>
                            <input class="form-control" type="number" name="points" placeholder="100"
                                   pattern="^([0-9]){4,20}$"
                                   id="points" required="required" onkeyup="calculateConvertedPoints(this.value)"/>
                            <div id="errorPoints" class="invalid-feedback">Enter Amount Of Points!</div>

                        </div><!-- Points to convert END-->
                        <span class="form-control text-center border-bottom-0">You will get:</span>
                        <div class="input-group mb-3">
                            <p id="convertedPoints" class="form-control text-center">Points to $0.00 USD</p>
                        </div><!-- points in dollars END-->
                        <!-- Save Button-->
                        <div class="row g-2 m-2">
                            <button id="convertPointsBtn" type="submit" name="convert" class="btn btn-success"><i class="bi bi-arrow-repeat me-2"></i>Convert</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>


