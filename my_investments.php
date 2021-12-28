<?php
$title = "My Investments - SOAMonitor.com";
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
                                        <i class="bi bi-gem me-2"></i></i>Upgrade Account
                                    </a>
                                </div><!--Upgrade Link END-->
                                <div class="col-12">
                                    <a href="earnigns.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-graph-up fa-fw me-2"></i>Earnings
                                    </a>
                                </div><!--Earnings Link END-->
                                <div class="col-12">
                                    <a href="my_investments.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-clipboard-data me-2"></i>My Investments</a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="a-m nav-link border-bottom">Earnings</a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="a-m nav-link border-bottom">Payouts</a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="sign-out a-m nav-link border-bottom"><i class="bi bi-trash fa-fw me-2"></i>Delete Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--Main Content -->
            <div class="col-xl-9">
                <!-- Balance Statistics -->
                <div class="row g-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="stat stat-heart d-flex justify-content-center align-items-center shadow-sm">
                            <span class="display-4">
                                <i class="bi bi-heart"></i>
                            </span>
                            <div class="ms-4 h6 fw-normal">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0 fw-bold">4.8</h4>
                                    <h4 class="mb-0 fw-bold">K</h4>
                                </div>
                                <h5>Subscribers</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="stat stat-reviews d-flex justify-content-center align-items-center
            shadow-sm">
                            <span class="display-4">
                                <i class="bi bi-cash-coin"></i>
                            </span>
                            <div class="ms-4 h6 fw-normal">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0 fw-bold">$213.32</h4>
                                </div>
                                <h5>Paid in Contests</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="stat stat-members d-flex justify-content-center align-items-center
            shadow-sm">
                            <span class="display-4">
                                <i class="bi bi-people"></i>
                            </span>
                            <div class="ms-4 h6 fw-normal">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0 fw-bold">12</h4>
                                </div>
                                <h5>Members</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chart -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card card-body bg-transparent border p-4 h-100">
                            <div class="row g-4">
                                <h3>My Investments</h3>
                            </div>
                            <!--Apex Chart-->

                            <table>
                                <tr>
                                    <th>Name</th>
                                    <th>Deposit</th>
                                    <th>Withdrawal</th>
                                </tr>
                                <tr>
                                    <td>Site name</td>
                                    <td>$123</td>
                                    <td>$53</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>

