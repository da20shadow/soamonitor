<?php
require_once('core/init.php');
if (isset($_SESSION['username'])){
$title = "My Investments - SOAMonitor.com";
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
                <!-- Investment Statistics -->
                <div class="row g-4">
                    <?php
                    $userInvestments = $getFromProject->getTotalInvestmentsByInvestorID($user_id);
                    $userWithdrawalInvestment = $getFromProject->getTotalWithdrawalByInvestorID($user_id);
                    $totalInvested = $userInvestments['totalInvested'];
                    $totalWithdrawal = $userWithdrawalInvestment['totalWithdrawal'];
                    $profitLoss = $totalWithdrawal - $totalInvested;
                    ?>
                    <!-- Total Deposits -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-sm">
                            <h6>Total Deposits</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$<?php echo htmlspecialchars($totalInvested);?></h2>
                        </div>
                    </div>
                    <!-- Total Withdrawals -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-sm">
                            <h6>Total Withdrawals</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$ <?php echo htmlspecialchars($totalWithdrawal);?></h2>
                        </div>
                    </div>
                    <!-- Total Profit Loss -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-sm">
                            <h6>Lifetime Profit/Loss</h6>
                            <h2 class="mb-0 fs-2 fw-bold <?php if ($profitLoss < 0){echo htmlspecialchars('text-danger');}
                            else{echo htmlspecialchars('text-success');}?>">$<?php echo htmlspecialchars($profitLoss);?></h2>
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
                                    <button class="btn btn-primary bg-gradient btn-sm ms-5"
                                       data-bs-toggle="modal" data-bs-target="#addProjectModal">
                                        <i class="bi bi-plus-lg me-2"></i> Add New Project
                                    </button>
                                </div><!--Add New Investment Button -->
                            </div>

                            <!--Search and Sort By Start-->
                            <div class="row g-3 align-items-center justify-content-between my-2">

                                <!-- Search -->
                                <div class="col-md-8">
                                    <form class="rounded position-relative">
                                        <input class="form-control pe-5 bg-transparent"
                                               type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0
                                                translate-middle-y" type="submit"><i class="bi bi-search fs-6 "></i></button>
                                    </form>
                                </div>
                                <!-- Select option -->
                                <div class="col-md-3">
                                    <!-- Short by filter -->
                                    <form>
                                        <select name="earningsHistoryFilter" id="earningsHistoryFilter"
                                                class="form-select text-secondary"  aria-label="Sort By">
                                            <option class="text-muted" value="">Sort By</option>
                                            <option value="project_name">Project Name</option>
                                            <option value="deposit">Deposit</option>
                                            <option value="withdrawal">Withdrawal</option>
                                            <option value="profit">Profit</option>
                                            <option value="loss">Loss</option>
                                            <option value="date">Date Added</option>
                                        </select>
                                    </form>
                                </div>

                            </div>

                            <!--Investments List-->
                            <div class="table-responsive">
                                <table id="projects-table" class="table-hover mt-2">
                                    <thead>
                                    <tr class="shadow-sm">
                                        <th>Project Name</th>
                                        <th>Deposit</th>
                                        <th>Withdrawal</th>
                                        <th>Profit/Loss</th>
                                        <th>Added on</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody id="investmentsList">

                                    </tbody>

                                </table>
                                <!--Pagination-->
                                <div class="my-3">
                                    <nav aria-label="Page navigation">
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
        <!--The Featured Ad Space-->
        <?php include "template/featured_ad_space.php"; ?>
    </div>
</section>
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

                    <h4 id="projectToUpdate" class="text-center"></h4>

                    <h4 id="editedProject" class="text-center"></h4>

                    <div class="needs-validation was-validated" id="editInvForm">

                        <div class="m-2">

                            <label class="form-label" for="editProjectAmount">Amount</label>
                            <input class="form-control" type="number" step="0.01" name="deposit" placeholder="$120.00"
                                   id="editProjectAmount" required="required"/>

                            <div id="depositErrorMessage" class="invalid-feedback">Enter Amount!</div>
                            <div id="depositSuccessMessage" class="valid-feedback">OK!</div>

                        </div><!-- Deposit/Withdrawal END-->
                        <div class="m-2">
                            <select id="editProjectAction" class="form-select" required aria-label="select">
                                <option value="">Choose Action...</option>
                                <option value="withdrawal">Withdrawal</option>
                                <option value="deposit">Deposit</option>
                            </select>
                            <div class="invalid-feedback">Select Deposit/Withdrawal!</div>
                            <div id="selectDepositSuccessMessage" class="valid-feedback">OK!</div>
                        </div><!-- Select Deposit/Withdrawal END-->
                        <!-- Save Button-->
                        <div class="row g-2 m-2">
                            <button id="saveEditProject" type="submit" name="add" class="btn btn-success bg-gradient">Add</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="closeEditModal" type="button" class="btn btn-secondary bg-gradient" data-bs-dismiss="modal">Close</button>
                    <button id="editProjectAgain" type="button" class="btn btn-primary bg-gradient" style="display:none;">Add Again</button>
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

                    <h4 id="deletedProject" class="text-center text-danger"></h4>
                    <h5 id="projectToDelete" class="text-danger text-center"></h5>

                </div>
                <div class="modal-footer">
                    <button id="closeDeleteModalBtn" type="button" class="btn btn-secondary bg-gradient" data-bs-dismiss="modal">Close</button>
                    <button id="confirmDeleteProjectBtn" type="button" class="btn btn-danger bg-gradient">Yes, Delete</button>
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

