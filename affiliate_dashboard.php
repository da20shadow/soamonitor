<?php
require_once('core/init.php');

if (isset($_SESSION['username'])){
    $title = "Affiliate Dashboard - SOAMonitor.com";
    $pageId = "affiliate_dashboard";
include ('includes/header.php');
?>

<!--Profile Banner-->
<?php include "template/account_profile_banner.php"; ?>
<!-- Account Page Content Start -->
<section class="pt-0">
    <div class="container my-4">
        <hr class="divider">
        <div class="row">
            <!--Left Sidebar -->
            <?php include "template/left_account_sidebar.php"; ?>
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
                            <h6>Total Ref. Earnings</h6>
                            <h2 class="mb-0 fs-2 fw-bold">$4882.65</h2>
                        </div>
                    </div>
                </div>
                <!-- Ref Link and points chart info -->
                <div class="row mt-5">

                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold">Ref Link:</span>
                        <input onclick="select()" type="text" name="ref-Url"
                               class="form-control bg-white shadow-none" id="ref-Url"
                               value="https://soamonitor.com/registration.php?ref=<?php echo htmlspecialchars($username);?>"
                               readonly >
                        <button onclick="copyFunc()" class="btn btn-primary bg-gradient" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="click"
                                title="Copied!" id="btn-copy">Copy</button>

                    </div><!-- Ref Link END-->

                    <div class="col-12">

                        <div class="card card-body bg-light border p-4 h-100">

                            <div class="row">
                                <h3 class="col-12 col-md-9">
                                    <i class="bi bi-people me-2"></i>
                                    Referrals
                                </h3>
                                <div class="col-12 col-md-3">
                                    <a href="promo_tools.php" class="btn btn-primary bg-gradient btn-sm ms-5">
                                        <i class="bi bi-megaphone me-2"></i> Promo Tools
                                    </a>
                                </div><!--Promo Tools Button -->
                            </div>

                            <!--Referrals List Start-->
                            <div class="table-responsive">
                                <table id="referralsTable" class="table-hover mt-2">
                                <thead>
                                <tr class="shadow-sm">
                                    <th>Name</th>
                                    <th>Coins comm.</th>
                                    <th>Affiliate comm.</th>
                                    <th>Joined Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="align-items-center">
                                    <td>
                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" alt="Avatar"
                                             class="avatar-img rounded-circle border border-white border-3 shadow"
                                             width="42px" height="42px">
                                        username
                                    </td>
                                    <td>4124</td>
                                    <td>$124</td>
                                    <td>21/12/2021</td>
                                    <td>
                                        <a href="profile.php?profile_id=1" class="btn btn-primary bg-gradient btn-sm">Vew Profile</a>
                                    </td>
                                </tr>
                                <tr class="align-items-center">
                                    <td>
                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" alt="Avatar"
                                             class="avatar-img rounded-circle border border-white border-3 shadow"
                                             width="42px" height="42px">
                                        username2
                                    </td>
                                    <td>51242</td>
                                    <td>$1242</td>
                                    <td>11/12/2021</td>
                                    <td>
                                        <a href="profile.php?profile_id=5" class="btn btn-primary bg-gradient btn-sm">View Profile</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
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
        <!--The Featured Ad Space-->
        <?php include "template/featured_ad_space.php"; ?>
    </div>

</section>

<?php include("includes/footer.php");
}else{
    header("Location: login.php");
}

?>

