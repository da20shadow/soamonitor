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
    <div class="container my-4">
        <hr class="divider">
        <div class="row">
            <!--Left Sidebar -->
            <?php include "template/left_account_sidebar.php"; ?>
            <!--Main Content -->
            <div class="col-xl-9">
                <!-- Ad Statistics Start -->
                <div class="row g-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="stat stat-heart d-flex justify-content-center align-items-center shadow-sm">
                            <span class="display-4">
                                <i class="bi bi-megaphone"></i>
                            </span>
                            <div class="ms-4 h6 fw-normal">
                                <div class="d-flex align-items-center my-2">
                                    <h4 class="mb-0 fw-bold">3</h4>
                                </div>
                                <h5>Active Ads</h5>
                            </div>
                        </div>
                    </div><!--Active Ads -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="stat stat-reviews d-flex
                        justify-content-center align-items-center shadow-sm">
                            <span class="display-4">
                                <i class="bi bi-bar-chart"></i>
                            </span>
                            <div class="ms-4 h6 fw-normal">
                                <div class="d-flex align-items-center my-2">
                                    <h4 class="mb-0 fw-bold">15,054</h4>
                                </div>
                                <h5>Total Views</h5>
                            </div>
                        </div>
                    </div><!--Total Ad Views-->
                    <div class="col-sm-6 col-lg-4">
                        <div class="stat stat-members d-flex
                        justify-content-center align-items-center shadow-sm">
                            <span class="display-4">
                                <i class="bi bi-hand-index"></i>
                            </span>
                            <div class="ms-4 h6 fw-normal">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0 fw-bold">135</h4>
                                </div>
                                <h5>Total Clicks</h5>
                            </div>
                        </div>
                    </div><!--Total clicks-->
                </div><!-- Ad Statistics END-->
                <!-- Ads List -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card card-body bg-light border p-4 h-100">
                            <div class="row">
                                <h3 class="col-12 col-md-9">
                                    <i class="bi bi-bar-chart me-2"></i>My Ads
                                </h3>
                                <div class="col-12 col-md-3">
                                    <a href="<?php echo htmlspecialchars('add_new_ad.php');?>"
                                       class="btn btn-primary btn-sm ms-5">
                                        <i class="bi bi-plus-lg me-2"></i> Add New Ad
                                    </a>
                                </div><!--Add New Ad Button -->
                            </div>
                            <!--Ads Table-->
                            <div class="table-responsive">
                            <table id="ads-table" class="table-hover mt-2">
                                <thead>
                                <tr class="shadow-sm">
                                    <th>Ad title</th>
                                    <th>Views</th>
                                    <th>Clicks</th>
                                    <th>Expire on</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="align-items-center">
                                    <td>Ad Title ala bala And Little Longer Title</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td></td>
                                    <td class="text-primary">Pending</td>
                                    <td>
                                        <button class="btn btn-success btn-sm disabled">Start</button>
                                        <a href="<?php echo htmlspecialchars('edit_ad.php');?>"
                                           class="btn btn-primary btn-sm disabled">Edit</a>
                                    </td>
                                </tr>
                                <tr class="align-items-center">
                                    <td>Join now and earn big</td>
                                    <td>14 124</td>
                                    <td>224</td>
                                    <td>08/01/2022</td>
                                    <td class="text-success">Running</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm">Pause</button>
                                        <a href="<?php echo htmlspecialchars('edit_ad.php');?>"
                                           class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                </tr>
                                <tr class="align-items-center">
                                    <td>Ad Title ala bala</td>
                                    <td>51 242</td>
                                    <td>1242</td>
                                    <td>15/01/2022</td>
                                    <td class="text-danger">Paused</td>
                                    <td>
                                        <button class="btn btn-success btn-sm">Start</button>
                                        <a href="<?php echo htmlspecialchars('edit_ad.php');?>"
                                                class="btn btn-primary btn-sm">Edit</a>
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

<?php
include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>

