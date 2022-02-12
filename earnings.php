<?php
require_once('core/init.php');
if (isset($_SESSION['username'])){
$title = "Earnings - SOAMonitor.com";
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
                    <!-- Earnings this month -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-sm">
                            <h6>Earnings this month</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$299.95</h2>
                        </div>
                    </div>
                    <!-- Affiliate Earning -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="text-center p-4 bg-light rounded-3 shadow-sm">
                            <h6>Affiliate commissions</h6>
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
                <!-- Earning History -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card card-body bg-white border p-4 h-100">
                            <div class="row g-4">
                                <h3><i class="bi bi-clock-history me-2"></i>Earnings History</h3>
                            </div>
                            <!--Earning History Table -->
                            <div class="card bg-transparent border rounded-3">

                                <!-- Card body START -->
                                <div class="card-body">

                                    <!--Search and Sort By Start-->
                                    <div class="row g-3 align-items-center justify-content-between mb-2">

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
                                                    <option value="my_comments">Published Comments</option>
                                                    <option value="my_posts">Published Articles</option>
                                                    <option value="my_ideas">Submitted Ideas</option>
                                                    <option value="ref_purchases">Ref Purchases</option>
                                                    <option value="ref_comments">Ref Comments</option>
                                                    <option value="ref_posts">Ref Articles</option>
                                                </select>
                                            </form>
                                        </div>

                                    </div>

                                    <!-- Payout list table START -->
                                    <div class="table-responsive border-0">
                                        <table class="table align-middle p-4 mb-0 table-hover">
                                            <!-- Table head -->
                                            <thead>
                                            <tr>
                                                <th scope="col" class="border-0 rounded-start">Action Description</th>
                                                <th scope="col" class="border-0">Amount</th>
                                                <th scope="col" class="border-0">Status</th>
                                                <th scope="col" class="border-0">Date</th>
                                            </tr>
                                            </thead>
                                            <!-- Table body START -->
                                            <tbody>

                                            <tr>
                                                <td>
                                                    Ref.
                                                    <a href="#" class="fst-italic">Bhavin</a>
                                                    - Published Comment.
                                                </td>
                                                <td class="fw-bold">20 <i class="bi bi-coin text-warning"></i></td>
                                                <td><span class="badge bg-success bg-opacity-10 text-success">Received</span></td>
                                                <td>18/8/2021</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                     - Published Comment.
                                                </td>
                                                <td>20 <i class="bi bi-coin text-warning"></i></td>
                                                <td><span class="badge bg-success bg-opacity-10 text-success">Received</span></td>
                                                <td>18/8/2021</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Idea Name If is little longer what? - Submitted Idea.
                                                </td>
                                                <td></td>
                                                <td><span class="badge bg-warning bg-opacity-10 text-warning">Pending</span></td>
                                                <td>18/8/2021</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Ref.
                                                    <a href="#" class="fst-italic">Aayafi</a>
                                                    - Published Article.
                                                </td>
                                                <td>20 <i class="bi bi-coin text-warning"></i></td>
                                                <td><span class="badge bg-success bg-opacity-10 text-success">Received</span></td>
                                                <td>18/8/2021</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Ref.
                                                    <a href="#" class="fst-italic">Praveen</a>
                                                    - Ad Purchase.
                                                </td>
                                                <td>$1,30</td>
                                                <td><span class="badge bg-success bg-opacity-10 text-success">Received</span></td>
                                                <td>18/8/2021</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Ref.
                                                    <a href="#" class="fst-italic">John</a>
                                                    - VIP Membership Purchase.
                                                </td>
                                                <td>$1,90</td>
                                                <td><span class="badge bg-success bg-opacity-10 text-success">Received</span></td>
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
                            <!--Earning History Table END-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--The Featured Ad Space-->
        <?php include "template/featured_ad_space.php"; ?>
    </div>
</section>

<?php
include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>

