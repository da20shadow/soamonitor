<?php
require_once('core/init.php');
if (isset($_SESSION['username'])){
$title = "Account - SOAMonitor.com";
include ('includes/header.php');
?>
<!--Profile Banner-->
<?php include "template/account_profile_banner.php"; ?>
<!-- Account Page Content Start -->
<section class="pt-0">
    <div class="container">
        <hr class="divider">
        <div class="row">
            <!--Left Sidebar -->
            <?php include "template/left_account_sidebar.php"; ?>
            <!--Main Content -->
            <div class="col-xl-9">
                <!-- Balance Statistics -->
                <div class="row g-4">
                    <!-- Available Balance -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 rounded-3 shadow-sm" style="background-color:#e5f0fa;">
                            <h6 class="fw-bold">Balance</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$199.95</h2>
                            <button class="btn btn-primary bg-gradient btn-sm mt-2"
                                    data-bs-toggle="modal" data-bs-target="#withdrawal">
                                <i class="bi bi-cash-coin me-2"></i>Withdraw Earning
                            </button>
                        </div>
                    </div>
                    <!-- Paid This month -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-sm">
                            <h6 class="fw-bold">Total Paid</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$750.35</h2>
                            <p class="text-muted">View transaction</p>
                        </div>
                    </div>
                    <!-- Lifetime Paid -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-sm">
                            <h6 class="fw-bold">Pending Payouts</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$482.65</h2>
                            <p class="text-muted">Expected payout on 05/08/2021</p>
                        </div>
                    </div>
                </div>
                <!-- Payouts History List -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card card-body bg-white border p-4 h-100">
                            <div class="row g-4">
                                <h3><i class="bi bi-cash-stack"></i> Payouts</h3>
                            </div>
                            <!--Payouts Table-->
                            <div class="card bg-transparent border rounded-3">

                                <!-- Card body START -->
                                <div class="card-body">

                                    <!-- Payout list table START -->
                                    <div class="table-responsive border-0">
                                        <table class="table align-middle p-4 mb-0 table-hover">
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
                                                <td>
                                                    <h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Successful payout #102356</a></h6>
                                                </td>
                                                <td>$3,999</td>
                                                <td class="text-center text-sm-start">
                                                    <span class="badge bg-success bg-opacity-10 text-success">Paid</span>
                                                </td>
                                                <td>18/8/2021</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Successful payout #102356</a></h6>
                                                </td>
                                                <td>$3,999</td>
                                                <td class="text-center text-sm-start">
                                                    <span class="badge bg-warning bg-opacity-10 text-warning">Pending</span>
                                                </td>
                                                <td>18/8/2021</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Successful payout #102356</a></h6>
                                                </td>
                                                <td>$3,999</td>
                                                <td class="text-center text-sm-start">
                                                    <span class="badge bg-danger bg-opacity-10 text-danger">Canceled</span>
                                                </td>
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
                                <!-- Card body End -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--The Featured Ad Space-->
        <?php include "template/featured_ad_space.php"; ?>
    </div>
</section>
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
<?php
include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>

