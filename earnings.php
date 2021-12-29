<?php
$title = "Earnings - SOAMonitor.com";
include ('includes/header.php');
?>
<div class="container-fluid p-1"></div>
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
                                Mehmed Syuleyman
                                <i class="bi bi-patch-check-fill text-info small"></i>
                            </h1>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item h6 fw-light me-3 mb-1">
                                    <i class="bi bi-gem"></i>
                                    VIP Member
                                </li>
                                <li class="list-inline-item h6 fw-light me-3 mb-1">
                                    <i class="bi bi-people text-orange me-2"></i>
                                    35 Referrals
                                </li>
                                <li class="list-inline-item h6 fw-light me-3 mb-1">
                                    <i class="bi bi-clipboard-data text-purple me-2"></i>
                                    7 Projects
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
    <div class="container">
        <hr class="divider">
        <div class="row">
            <!--Right Sidebar -->
            <div class="col-xl-3">

                <nav class="navbar navbar-expand-md">
                    <div class="container px-1 px-xl-2 mx-0">
                        <button class="navbar-toggler m-auto collapsed" type="button"
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
                                    <a href="account.php" class="a-m nav-link border-bottom">
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
                                    <a href="my_investments.php" class="a-m nav-link border-bottom">
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
                                        <i class="bi bi-gear fa-fw me-2"></i>Settings</a>
                                </div><!--Edit Profile Link END-->
                                <div class="col-12">
                                    <a href="#" class="a-m nav-link border-bottom">
                                        <i class="bi bi-arrow-repeat me-2"></i>Subscription</a>
                                </div><!--My Subscription Link END-->
                                <div class="col-12">
                                    <a href="#" class="sign-out a-m nav-link border-bottom">
                                        <i class="bi bi-trash fa-fw me-2"></i>Delete Account</a>
                                </div><!--Delete account Links -->
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--Main Content -->
            <div class="col-xl-9">
                <!-- Balance Statistics -->
                <div class="row g-4">
                    <!-- Earnings this month -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-lg">
                            <h6>Earnings this month</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$299.95</h2>
                        </div>
                    </div>
                    <!-- Affiliate Earning -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-lg">
                            <h6>Affiliate commissions
                                <a tabindex="0" class="h6 mb-0" role="button" data-bs-toggle="popover"
                                   data-bs-trigger="focus" data-bs-placement="top"
                                   data-bs-content="After US royalty withholding tax"
                                   data-bs-original-title="" title="">
                                    <i class="bi bi-info-circle-fill small"></i>
                                </a>
                            </h6>
                            <h2 class="mb-0 fs-2 fw-bold">$750.35</h2>
                        </div>
                    </div>
                    <!-- Lifetime Earnings -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-lg">
                            <h6>Lifetime Earnings</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$4882.65</h2>
                        </div>
                    </div>

                </div>
                <!-- Chart -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card card-body bg-transparent border p-4 h-100">
                            <div class="row g-4">
                                <h3>Earned Commissions</h3>
                            </div>
                            <!--Apex Chart-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>

