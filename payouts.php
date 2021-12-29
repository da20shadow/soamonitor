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
                    <!-- Available Balance -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-lg">
                            <h6>Balance</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$199.95</h2>
                            <button class="btn btn-primary btn-sm mt-2"
                                    data-bs-toggle="modal" data-bs-target="#withdrawal">
                                <i class="bi bi-cash-coin me-2"></i>Withdraw Earning
                            </button>
                        </div>
                    </div>
                    <!-- Paid This month -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-lg">
                            <h6>Paid Last Month</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$750.35</h2>
                        </div>
                    </div>
                    <!-- Lifetime Paid -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-lg">
                            <h6>Total Paid</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$4882.65</h2>
                        </div>
                    </div>
                </div>
                <!-- Request Withdrawal Modal -->
                <div class="modal fade" id="withdrawal" tabindex="-1"
                     aria-labelledby="withdrawal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Request Withdrawal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <form action="includes/login.inc.php" method="post"
                                          class="needs-validation was-validated"
                                          onsubmit="return withdrawalFormValidation()">
                                        <div class="m-2">
                                            <label class="form-label" for="withdrawalAmount">Project Name</label>
                                            <input class="form-control" type="number"
                                                   name="withdrawalAmount" placeholder="Min: $5"
                                                   pattern="^([1-9]{1,3})$"
                                                   id="withdrawalAmount" required="required"/>
                                            <div class="invalid-feedback">Enter Withdrawal Amount ($5,$10 etc.)!</div>
                                            <div class="valid-feedback">Good!</div>
                                        </div><!-- Withdrawal Amount END-->
                                        <div class="m-2">
                                            <select class="form-select" required aria-label="select">
                                                <option value="">Choose Payment Processor...</option>
                                                <option value="1">PerfectMoney</option>
                                                <option value="2">Payeer</option>
                                                <option value="3">LTC</option>
                                                <option value="4">Doge</option>
                                            </select>
                                            <div class="invalid-feedback">Select Payment Processor!</div>
                                            <div class="valid-feedback">OK!</div>
                                        </div><!-- Select Payment Processor END-->
                                        <div class="row g-2 my-1">
                                            <button type="submit" name="add" class="btn btn-success ">Withdrawal</button>
                                        </div><!-- Withdrawal Button END-->
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chart -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card card-body bg-transparent border p-4 h-100">
                            <div class="row g-4">
                                <h3>Payouts</h3>
                            </div>
                            <!--Payouts Table-->
                            <div class="card bg-transparent border rounded-3">

                                <!-- Card body START -->
                                <div class="card-body">

                                    <!-- Payout list table START -->
                                    <div class="table-responsive border-0">
                                        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                            <!-- Table head -->
                                            <thead>
                                            <tr>
                                                <th scope="col" class="border-0 rounded-start">Payout</th>
                                                <th scope="col" class="border-0">Amount</th>
                                                <th scope="col" class="border-0">Status</th>
                                                <th scope="col" class="border-0 rounded-end">Date</th>
                                            </tr>
                                            </thead>
                                            <!-- Table body START -->
                                            <tbody>
                                            <!-- Table item -->
                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Successful payout #102356</a></h6>
                                                </td>

                                                <!-- Table data -->
                                                <td>$3,999
                                                    <!-- Drop down with id -->
                                                    <a href="#" class="h6 mb-0" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-info-circle-fill"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="small">Commission</span>
                                                                <span class="h6 mb-0 small">$86</span>
                                                            </div>
                                                            <hr class="my-1">
                                                        </li>
                                                        <!-- Divider -->
                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="small">Earning</span>
                                                                <span class="h6 mb-0 small">$86</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>

                                                <!-- Table data -->
                                                <td class="text-center text-sm-start">
                                                    <span class="badge bg-success bg-opacity-10 text-success">Paid</span>
                                                </td>

                                                <!-- Table data -->
                                                <td>18/8/2021</td>
                                            </tr>

                                            </tbody>
                                            <!-- Table body END -->
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
                                    <!-- Payout list table END -->

                                </div>
                                <!-- Card body START -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>

