<?php
require_once('core/init.php');
if (isset($_SESSION['username'])){
$title = "Upgrade Account - SOAMonitor.com";
    $pageId = "upgrade";

include ('includes/header.php');
    //Plan 1
    $plan1PriceMonth = "9,99";
    $plan1PriceMonth = "$" . $plan1PriceMonth;
    $plan1PriceYear = "4,99";
    $plan1PriceYear = "$" . $plan1PriceYear;
    //Plan 2
    $plan2PriceMonth = "23,99";
    $plan2PriceMonth = "$" . $plan2PriceMonth;
    $plan2PriceYear = "11,99";
    $plan2PriceYear = "$" . $plan2PriceYear;
    //Plan 3
    $plan3PriceMonth = "39,99";
    $plan3PriceMonth = "$" . $plan3PriceMonth;
    $plan3PriceYear = "19,99";
    $plan3PriceYear = "$" . $plan3PriceYear;
?>

<section class="py-5">

    <div class="container">

        <!--Title & Switch Discount START-->
        <div class="row g-4 position-relative mb-4">

            <div class="col-lg-10 mx-auto text-center position-relative">
                <h1 class="fw-bold">Affordable Pricing Packages</h1>
                <p class="mb-4 pb-1">Get Full Access To Awesome Content And Features.</p>
                <!--Switch START -->
                <form action="" class="d-flex align-items-center justify-content-center">

                    <!-- Label -->
                    <span class="h6 mb-0 fw-bold">Monthly</span>
                    <!-- Switch -->
                    <div class="form-check form-switch fs-3 ms-2 mb-0">
                        <input class="form-check-input mt-0 price-toggle"
                               type="checkbox" id="upgradePriceSwitch" onchange="priceSwitcher()">
                    </div>
                    <!-- Label -->
                    <div class="position-relative">
                        <span class="h6 mb-0 fw-bold">Yearly</span>
                        <span class="badge bg-danger bg-opacity-10 text-danger ms-1
                        position-absolute top-0 start-100 translate-middle ms-2 ms-md-5">-50% discount</span>
                    </div>

                </form>
                <!--Switch END -->
            </div>

        </div>
        <!--Title & Switch Discount END-->
        <!--Pricing START -->
        <div class="row g-4">

            <!--Pricing Card 1 START-->
            <div class="col-md-6 col-xl-4">
                <div class="card border rounded-3 p-2 p-sm-4 h-100 shadow">
                    <!--Card Header-->
                    <div class="card-header p-0 rounded-3">

                        <!-- Price and Info -->
                        <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded-2">
                            <!-- Info -->
                            <div>
                                <h5 class="mb-0 fw-bold">Basic</h5>
                                <div class="badge bg-dark bg-gradient mb-0 rounded-pill fw-normal">Most popular</div>
                            </div>
                            <!-- Price -->
                            <div>
                                <h4 class="text-success mb-0 plan-price fw-bold"
                                    data-monthly-price="<?php echo htmlspecialchars($plan1PriceMonth); ?>"
                                    data-annual-price="<?php echo htmlspecialchars($plan1PriceYear); ?>">
                                    <?php echo htmlspecialchars($plan1PriceMonth); ?></h4>
                                <p class="small mb-0">/ per month</p>
                            </div>
                        </div>

                    </div>
                    <!--Divider -->
                    <div class="position-relative my-3 text-center">
                        <hr>
                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3">
                            Plan includes
                        </p>
                    </div>
                    <!--Card Body -->
                    <div class="card-body pt-0">

                        <ul class="list-unstyled mt-2 mb-0">
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 5% Referral Purchases Commissions</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 5% Referral Activity Coins</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Convert Coins 1000 => $1.00</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Full Content Access (Priceless)</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Access to Investments Management Tools</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Access to Private Telegram Chat Group</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>No Advertising Discount</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>Access to Write Articles & Get Paid</li>
                            <li class="h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>Landing pages &amp; Web widgets</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>24/7 dedicated Support</li>
                        </ul>

                    </div>
                    <!--Card Footer -->
                    <div class="card-footer bg-white text-center d-grid pb-0">

                        <a href="upgrade_plan.php?plan_id=1&price=full" id="firstPlanA" type="button" class="btn btn-lg btn-secondary bg-gradient mb-0">Get Started</a>

                    </div>
                </div>
            </div>
            <!--Pricing Card 1 END -->

            <!--Pricing Card 2 START-->
            <div class="col-md-6 col-xl-4">
                <div class="card border rounded-3 p-2 p-sm-4 h-100 shadow">
                    <!--Card Header-->
                    <div class="card-header p-0 rounded-3">

                        <!-- Price and Info -->
                        <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded-2">
                            <!-- Info -->
                            <div>
                                <h5 class="mb-0 fw-bold">Pro</h5>
                                <div class="badge bg-primary bg-gradient mb-0 rounded-pill fw-normal">Recommended</div>
                            </div>
                            <!-- Price -->
                            <div>
                                <h4 class="text-success mb-0 plan-price fw-bold"
                                    data-monthly-price="<?php echo htmlspecialchars($plan2PriceMonth); ?>"
                                    data-annual-price="<?php echo htmlspecialchars($plan2PriceYear); ?>">
                                    <?php echo htmlspecialchars($plan2PriceMonth); ?></h4>
                                <p class="small mb-0">/ per month</p>
                            </div>
                        </div>

                    </div>
                    <!--Divider -->
                    <div class="position-relative my-3 text-center">
                        <hr>
                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3">
                            Plan includes
                        </p>
                    </div>
                    <!--Card Body -->
                    <div class="card-body pt-0">

                        <ul class="list-unstyled mt-2 mb-0">
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 10% Referral Purchases Commissions</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 5% Referral Activity Coins</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Convert Coins 1000 => $1.00</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Full Content Access (Priceless)</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Access to Investments Management Tools</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Access to Private Telegram Chat Group</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 5% Advertising Discount</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>Access to Write Articles & Get Paid</li>
                            <li class="h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>Landing pages &amp; Web widgets</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>24/7 dedicated Support</li>
                        </ul>

                    </div>
                    <!--Card Footer -->
                    <div class="card-footer bg-white text-center d-grid pb-0">

                        <a href="upgrade_plan.php?plan_id=2" id="secondPlanA" type="button" class="btn btn-lg btn-primary bg-gradient mb-0">Get Started</a>

                    </div>
                </div>
            </div>
            <!--Pricing Card 2 END -->

            <!--Pricing Card 3 START-->
            <div class="col-md-6 col-xl-4">
                <div class="card border rounded-3 p-2 p-sm-4 h-100 shadow">
                    <!--Card Header-->
                    <div class="card-header p-0 rounded-3">

                        <!-- Price and Info -->
                        <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded-2">
                            <!-- Info -->
                            <div>
                                <h5 class="mb-0 fw-bold">VIP</h5>
                                <div class="badge bg-secondary bg-gradient mb-0 rounded-pill fw-normal">Best Value</div>
                            </div>
                            <!-- Price -->
                            <div>
                                <h4 class="text-success mb-0 plan-price fw-bold"
                                    data-monthly-price="<?php echo htmlspecialchars($plan3PriceMonth); ?>"
                                    data-annual-price="<?php echo htmlspecialchars($plan3PriceYear); ?>">
                                    <?php echo htmlspecialchars($plan3PriceMonth); ?></h4>
                                <p class="small mb-0">/ per month</p>
                            </div>
                        </div>

                    </div>
                    <!--Divider -->
                    <div class="position-relative my-3 text-center">
                        <hr>
                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3">
                            Plan includes
                        </p>
                    </div>
                    <!--Card Body -->
                    <div class="card-body pt-0">

                        <ul class="list-unstyled mt-2 mb-0">
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 20% Referral Purchases Commissions</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 10% Referral Activity Coins</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Convert Coins 1000 => $1.00</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Full Content Access (Priceless)</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Access to Investments Management Tools</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Access to Private Telegram Chat Group</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Up to 10% Advertising Discount</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-patch-check-fill text-success me-2"></i>Access to Write Articles & Get Paid</li>
                            <li class="h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>Landing pages &amp; Web widgets</li>
                            <li class="mb-3 h6 fw-light"><i class="bi bi-x-octagon-fill text-danger me-2"></i>24/7 dedicated Support</li>
                        </ul>

                    </div>
                    <!--Card Footer -->
                    <div class="card-footer bg-white text-center d-grid pb-0">

                        <a href="upgrade_plan.php?plan_id=3" id="thirdPlanA" type="button" class="btn btn-lg btn-secondary bg-gradient mb-0">Get Started</a>

                    </div>
                </div>
            </div>
            <!--Pricing Card 3 END -->

        </div>
        <!--Pricing END -->
    </div>

</section>

<?php include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>