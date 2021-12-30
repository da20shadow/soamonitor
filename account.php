<?php
$title = "Account - SOAMonitor.com";
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
                                        <i class="bi bi-gear fa-fw me-2"></i>Settings</a>
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
                                    <a href="includes/logout.php" class="sign-out a-m nav-link border-bottom">
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
                                    <h4 class="mb-0 fw-bold">75 253</h4>
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
                                    <h4 class="mb-0 fw-bold">$1,213.32</h4>
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
                                    <h4 class="mb-0 fw-bold">35</h4>
                                </div>
                                <h5>Referrals</h5>
                            </div>
                        </div>
                    </div><!--Total Referrals-->
                </div>
                <!-- Ref Link and points chart info -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card card-body bg-transparent border p-4 h-100">
                            <div class="input-group mb-3">
                                <span class="input-group-text fw-bold">Ref Link:</span>
                                <input onclick="select()" type="text" name="ref-Url"
                                       class="form-control bg-white shadow-none" id="ref-Url"
                                       value="https://soamonitor.com/registration.php?ref=9"
                                       readonly >
                                <button onclick="copyFunc()" class="btn btn-primary"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-trigger="click"
                                        title="Copied!" id="btn-copy">Copy</button>
                            </div><!-- Ref Link END-->
                            <div class="row g-1 mt-3 p-3 border rounded-3">
                                <div class="col-12 col-md-6 ">
                                    <h4 class="text-center fw-bold">VIP Members -> 1000 points = $1</h4>
                                </div>
                                <div class="col-12 col-md-6 ">
                                    <h4 class="text-center fw-bold">Free Members -> 1000 points = $0,20</h4>
                                </div>
                            </div><!--Short Points info Chart END-->
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
                    <form action="includes/login.inc.php" method="post"
                          class="needs-validation was-validated"
                          onsubmit="return convertPointsFormValidation()">

                        <div class="m-2">

                            <label class="form-label" for="points">Points</label>
                            <input class="form-control" type="number" name="points" placeholder="min 1000"
                                   pattern="^([0-9])+$"
                                   id="points" required="required"/>
                            <div id="depositErrorMessage" class="invalid-feedback">Enter Amount!</div>
                            <div id="depositSuccessMessage" class="valid-feedback">OK!</div>

                        </div><!-- Points to convert END-->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">You will get</span>
                            <input type="text" class="form-control" 
                                   aria-label="input" aria-describedby="inputGroup-sizing-default">
                        </div><!-- points in dollars END-->
                        <!-- Save Button-->
                        <div class="row g-2 m-2">
                            <button type="submit" name="add" class="btn btn-success ">Add</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>

