<?php
require_once('core/init.php');

if (isset($_SESSION['username'])){
$title = "Affiliate Dashboard - SOAMonitor.com";
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
                                    <span id="membership">VIP</span> Member
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
                    <!-- Earned Points  -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-sm">
                            <h6>Earned Points From Referrals</h6>
                            <h2 class="mb-0 fs-2 fw-bold">126 295</h2>
                        </div>
                    </div>
                    <!-- Affiliate Earning -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-sm">
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
                        <div class="text-center p-4 bg-light rounded-3 shadow-sm">
                            <h6>Lifetime Earnings</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$4882.65</h2>
                        </div>
                    </div>
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
                            <!--Referrals List-->
                            <table class="projects-table table-hover mt-2">
                                <thead>
                                <tr class="shadow-sm">
                                    <th>Name</th>
                                    <th>Earned Points</th>
                                    <th>Purchases</th>
                                    <th>Reg Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="align-items-center">
                                    <td>
                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" alt="Avatar"
                                             class="avatar-img rounded-circle border border-white border-3 shadow"
                                             width="48px" height="48px">
                                        John Doe
                                    </td>
                                    <td>4124</td>
                                    <td>$124</td>
                                    <td>21/12/2021</td>
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProject">Vew Profile</button>
                                    </td>
                                </tr>
                                <tr class="align-items-center">
                                    <td>
                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" alt="Avatar"
                                             class="avatar-img rounded-circle border border-white border-3 shadow"
                                             width="48px" height="48px">
                                        John Doe 2
                                    </td>
                                    <td>51242</td>
                                    <td>$1242</td>
                                    <td>11/12/2021</td>
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProject">View Profile</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!--Pagination-->
                            <div class="my-3">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include("includes/footer.php");
}else{
    header("Location: login.php");
}

?>

