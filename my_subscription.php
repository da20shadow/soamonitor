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
                    <!-- Membership info -->
                    <div class="row mt-2">

                        <div class="col-12">

                            <div class="card card-body bg-light border p-4 h-100">

                                <!--Subscription details Start-->
                                <div class="row g-4">
                                    <!-- Update plan item -->
                                    <div class="col-6 col-lg-3">
                                        <span class="text-secondary">Membership</span>
                                        <h4 class="fw-bold">VIP</h4>
                                    </div>
                                    <!-- Update plan item -->
                                    <div class="col-6 col-lg-3">
                                        <span class="text-secondary">Monthly limit</span>
                                        <h4 class="fw-bold">Unlimited</h4>
                                    </div>
                                    <!-- Update plan item -->
                                    <div class="col-6 col-lg-3">
                                        <span class="text-secondary">Cost</span>
                                        <h4 class="fw-bold">$19/Month</h4>
                                    </div>

                                    <!-- Update plan item -->
                                    <div class="col-6 col-lg-3">
                                        <span class="text-secondary">Renewal Date</span>
                                        <h4 class="fw-bold">Feb 17, 2022</h4>
                                    </div>
                                </div><!-- Update plan END -->

                                <!-- Progress bar -->
                                <div class="overflow-hidden my-4">
                                    <h6 class="mb-0">85%</h6>
                                    <div class="progress progress-sm bg-primary bg-opacity-10">
                                        <div class="progress-bar bg-primary"
                                             role="progressbar"
                                             style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <div>
                                        <!-- Switch Content -->
                                        <div class="d-sm-flex">
                                            <div class="form-check form-switch form-check-md">
                                                <input class="form-check-input" type="checkbox" id="checkPrivacy1" checked="">
                                                <label class="form-check-label" for="checkPrivacy1">Auto Renewal</label>
                                            </div>
                                        </div>
                                        <p class="mb-0 small">Your plan will automatically renew on: 02/17/2022. Payment Amount: $250</p>
                                    </div>
                                    <!-- Buttons -->
                                    <div class="mt-2 mt-sm-0">
                                        <button type="button" class="btn btn-sm btn-outline-danger bg-gradient me-2 mb-0">Cancel plan</button>
                                        <a href="#" class="btn btn-sm btn-success bg-gradient mb-0">Upgrade plan</a>
                                    </div>
                                </div>

                                <!-- Divider -->
                                <hr>

                                <!-- Plan Benefits -->
                                <div class="row">
                                    <h6 class="mb-3 fw-bold">The plan includes</h6>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 10% Affiliate Commission</li>
                                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 10% Coins Commission</li>
                                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Custom infrastructure</li>
                                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Full Access</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>24/7 dedicated Support</li>
                                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Private Telegram Chat Group</li>
                                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Unlimited Projects</li>
                                            <li class="h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Landing pages</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Subscription details END-->

                            </div>

                        </div>

                    </div>
                    <!--The Featured Ad Space-->
                    <?php include "template/featured_ad_space.php"; ?>
                </div>

            </div>
        </div>
    </section>

    <?php
    include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>


