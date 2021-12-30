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
            <!--Left Sidebar -->
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
                        <!-- Menu Links -->
                        <div class="collapse navbar-collapse w-100 p-3 border rounded-3 bg-light shadow"
                             id="sideBarCollapse">
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
                <!-- Investment Statistics -->
                <div class="row g-4">
                    <!-- Total Deposits -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-lg">
                            <h6>Total Deposits</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$299.95</h2>
                        </div>
                    </div>
                    <!-- Total Withdrawals -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-lg">
                            <h6>Total Withdrawals</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$750.35</h2>
                        </div>
                    </div>
                    <!-- Total Profit Loss -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-lg">
                            <h6>Lifetime Profit/Loss</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$482.65</h2>
                        </div>
                    </div>
                </div>
                <!-- Investments List -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card card-body bg-light border p-4 h-100 shadow-sm">
                            <div class="row">
                                <h3 class="col-12 col-md-9">
                                    <img src="assets/img/icons/investments.ico" alt="Icon" width="38px" height="38px">
                                    My Investments
                                </h3>
                                <div class="col-12 col-md-3">
                                    <a href="add_new_investment.php"
                                       class="btn btn-primary btn-sm ms-5"
                                       data-bs-toggle="modal" data-bs-target="#addProject">
                                        <i class="bi bi-plus-lg me-2"></i> Add New Project</a>
                                </div><!--Add New Investment Button -->
                                <!-- Add New Investment Modal -->
                                <div class="modal fade" id="addProject" tabindex="-1"
                                     aria-labelledby="addProject" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"> Add New Investment</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body py-3">
                                                    <form action="includes/login.inc.php" method="post"
                                                          class="needs-validation was-validated"
                                                          onsubmit="return addInvestmentFormValidation()">

                                                        <div>

                                                            <label class="form-label" for="projectName">Project Name</label>
                                                            <input class="form-control" type="text" name="project_name" placeholder="Project Name"
                                                                   pattern="^([a-zA-Z0-9_ ]{5,45})$"
                                                                   id="projectName" required="required"/>

                                                            <div class="invalid-feedback">Enter Project Name!</div>
                                                            <div class="valid-feedback">Good!</div>

                                                        </div><!-- Project Name END-->
                                                        <div>
                                                            <label class="form-label" for="deposit">Deposit</label>
                                                            <input class="form-control" type="number" step="0.01" name="deposit" placeholder="$120.00"
                                                                   id="deposit" required="required"/>
                                                            <div class="invalid-feedback">Enter Deposit!</div>
                                                            <div class="valid-feedback">Good!</div>
                                                        </div><!-- Deposit END-->
                                                        <!-- Add Button-->
                                                        <div class="row g-2 my-1">
                                                            <button type="submit" name="add" class="btn btn-success ">Add</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Investments List-->

                            <table class="projects-table table-hover mt-2">
                                <thead>
                                <tr class="shadow-sm">
                                    <th>Project Name</th>
                                    <th>Deposit</th>
                                    <th>Withdrawal</th>
                                    <th>Profit/Loss</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="align-items-center">
                                    <td>Name</td>
                                    <td>$124</td>
                                    <td>$154</td>
                                    <td>$30</td>
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProject">Edit</button>
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteProject">Delete</button>
                                    </td>
                                </tr>
                                <tr class="align-items-center">
                                    <td>Name 2</td>
                                    <td>$1243</td>
                                    <td>$1524</td>
                                    <td>$330</td>
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProject">Edit</button>
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteProject">Delete</button>
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
                            <!-- Edit Modal -->
                            <div class="modal fade" id="editProject" tabindex="-1"
                                 aria-labelledby="editProject" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add New Deposit/Withdrawal</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="includes/login.inc.php" method="post"
                                                  class="needs-validation was-validated"
                                                  onsubmit="return addDepositWtihdrawalFormValidation()">

                                                <div class="m-2">

                                                    <label class="form-label" for="deposit">Amount</label>
                                                    <input class="form-control" type="number" step="0.01" name="deposit" placeholder="$120.00"
                                                           id="deposit" required="required"/>

                                                    <div id="depositErrorMessage" class="invalid-feedback">Enter Amount!</div>
                                                    <div id="depositSuccessMessage" class="valid-feedback">OK!</div>

                                                </div><!-- Deposit/Withdrawal END-->
                                                <div class="m-2">
                                                    <select class="form-select" required aria-label="select">
                                                        <option value="">Choose Action...</option>
                                                        <option value="1">Withdrawal</option>
                                                        <option value="2">Deposit</option>
                                                    </select>
                                                    <div class="invalid-feedback">Select Deposit/Withdrawal!</div>
                                                    <div id="selectDepositSuccessMessage" class="valid-feedback">OK!</div>
                                                </div><!-- Select Deposit/Withdrawal END-->
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
                            <!-- Delete Modal -->
                            <div class="modal fade" id="deleteProject" tabindex="-1"
                                 aria-labelledby="deleteProject" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Are You Sure?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="text-danger text-center">You are about to delete "sitename" permanently!</h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger">Yes, Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>

