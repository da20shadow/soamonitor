<?php
require_once('core/init.php');

if (isset($_SESSION['username'])){

$user_id = $_SESSION['user_id'];

$user_id = $getFromFunc->checkInput($user_id);
$userInfo = $getFromUser->getUserInfo($user_id);

$balance = $userInfo['balance'];

$basic_price = 9.99;
$basic_price_discounted = 59.88;

$pro_price = 23.99;
$pro_price_discounted = 143.88;

$vip_price = 39.99;
$vip_price_discounted = 239.88;

$title ="Upgrade Plan";
$pageId = "upgrade_plan";

include ('includes/header.php');

if (isset($_GET["plan_id"]) && isset($_GET["price"])){
    $plan_id = htmlspecialchars($_GET["plan_id"]);
    $price = htmlspecialchars($_GET["price"]);



    if ($plan_id == "1"){
        if ($price == "full"){ ?>
            <!--Pricing Card 1 START-->

            <div class="col-md-6 col-xl-4 m-auto">
                <div class="card border rounded-3 p-2 p-sm-4 h-100 shadow">
                    <!--Card Header-->
                    <div class="card-header p-0 rounded-3">

                        <!-- Account balance info -->
                        <div class="justify-content-center align-items-center p-3 bg-light rounded-2">
                            <!-- Info -->

                            <h4 class="mb-0 fw-bold text-center">Account Balance:</h4>
                            <h3 id="balance" data-balance="<?php echo htmlspecialchars($balance);?>"
                                class="text-success mb-0 plan-price fw-bold text-center">
                                $<?php echo htmlspecialchars($balance); ?></h3>

                        </div>

                        <!--Divider -->
                        <div class="position-relative my-3 text-center">
                            <hr>
                            <p class="position-absolute top-50 start-50 translate-middle bg-body px-3 fs-5">
                                Plan:
                            </p>
                        </div>

                        <!-- Price and Info -->
                        <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded-2">
                            <!-- Info -->
                            <div>
                                <h5 class="mb-0 fw-bold">Basic</h5>
                                <div class="badge bg-dark bg-gradient mb-0 rounded-pill fw-normal">Most popular</div>
                            </div>
                            <!-- Price -->
                            <div>
                                <h4 class="text-success mb-0 plan-price fw-bold">
                                    $<span id="planPrice"><?php echo htmlspecialchars($basic_price); ?></span></h4>
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
                        </ul>

                    </div>

                    <!--Card Footer -->
                    <div class="card-footer bg-white text-center d-grid pb-0">

                        <!-- Change Plan -->
                        <form class="was-validated" action="">
                            <div class="mb-3">
                                <label for="firstPlan">Change Subscription Plan:</label>
                                <select class="form-select form-select-lg mb-3 shadow-none" name="plan" id="firstPlan" required>
                                    <option value="">Please, Select Subscription</option>
                                    <option value="1" selected>1 Month ($9,99)</option>
                                    <option value="2">1 Year ($59,88) -50% ($4,99/month)</option>
                                </select>
                                <div class="invalid-feedback">Please, Select Subscription</div>
                            </div>
                        </form>

                        <a href="upgrade_plan.php?plan_id=1&price=full" id="upgradeBtn" type="button"
                           class="btn btn-lg btn-secondary bg-gradient mb-0">Upgrade</a>

                    </div>
                </div>
            </div>

            <section>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-6 text-center m-auto">

                            <h4 class="mt-5">Your Balance: $<?php echo htmlspecialchars($balance); ?></h4>

                            <h2>Chosen Plan: Basic 1 Month ($9,99)</h2>
                            <p class="text-danger">Not Enough Money in your Account Balance, Add More Funds First!</p>
                            <button class="btn btn-primary bg-gradiant">Add Funds</button>

                            <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                                <form class="was-validated" action="">
                                    <div class="mb-3">
                                        <label for="firstPlan">Change Subscription Plan:</label>
                                        <select class="form-select form-select-lg mb-3" name="plan" id="firstPlan" required>
                                            <option value="">Please, Select Subscription</option>
                                            <option value="1" selected>1 Month ($9,99)</option>
                                            <option value="2">1 Year ($59,88) -50% ($4,99/month)</option>
                                        </select>
                                        <div class="invalid-feedback">Please, Select Subscription</div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary bg-gradiant lg-btn" type="submit" disabled>Upgrade Now</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        <?php }else if($price == "discounted"){ ?>
            <section>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-6 text-center m-auto">

                            <h4 id="balance" data-balance="<?php echo htmlspecialchars($balance);?>"
                                class="mt-5">Your Balance: $<?php echo htmlspecialchars($balance); ?></h4>

                            <h2>Chosen Plan: Basic 1 Year $59,88 -50% (1 Month ($4,99))</h2>
                            <p class="text-danger">Not Enough Money in your Account Balance, Add More Funds First!</p>
                            <button class="btn btn-primary bg-gradiant">Add Funds</button>

                            <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                                <form class="was-validated" action="">
                                    <div class="mb-3">
                                        <label for="firstPlan">Change Subscription Plan:</label>
                                        <select class="form-select form-select-lg mb-3" name="plan" id="firstPlan" required>
                                            <option value="">Please, Select Subscription</option>
                                            <option value="1">1 Month ($9,99)</option>
                                            <option value="2" selected>1 Year ($59,88) -50% ($4,99/month)</option>
                                        </select>
                                        <div class="invalid-feedback">Please, Select Subscription</div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary bg-gradiant lg-btn" type="submit" disabled>Upgrade Now</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        <?php }else{ ?>
            <h1 class="text-danger text-center">What are you trying to do ? :)</h1>
            <h2 class="text-danger text-center fw-bold">You got +1 Warning!</h2>
            <h2 class="text-danger text-center">Your account will be blocked if you get 3+ more warnings!</h2>
        <?php }
         }else if ($plan_id == "2"){
            if ($price == "full"){ ?>
                <section>
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-md-6 text-center m-auto">

                                <h4 id="balance" data-balance="<?php echo htmlspecialchars($balance);?>"
                                    class="mt-5">Your Balance: $<?php echo htmlspecialchars($balance); ?></h4>

                                <h2>Chosen Plan: Pro 1 Month ($23,99))</h2>
                                <p class="text-danger">Not Enough Money in your Account Balance, Add More Funds First!</p>
                                <button class="btn btn-primary bg-gradiant">Add Funds</button>

                                <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                                    <form class="was-validated" action="">
                                        <div class="mb-3">
                                            <label for="firstPlan">Change Subscription Plan:</label>
                                            <select class="form-select form-select-lg mb-3" name="plan" id="firstPlan" required>
                                                <option value="">Please, Select Subscription</option>
                                                <option value="1" selected>1 Month ($23,99)</option>
                                                <option value="2">1 Year ($143,88) -50% ($4,99/month)</option>
                                            </select>
                                            <div class="invalid-feedback">Please, Select Subscription</div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary bg-gradiant lg-btn" type="submit" disabled>Upgrade Now</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            <?php }else if ($price == "discounted"){ ?>
                <section>
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-md-6 text-center m-auto">

                                <h4 id="balance" data-balance="<?php echo htmlspecialchars($balance);?>"
                                    class="mt-5">Your Balance: $<?php echo htmlspecialchars($balance); ?></h4>

                                <h2>Chosen Plan: Pro 1 Year $143,88 -50% (1 Month ($11,99))</h2>
                                <p class="text-danger">Not Enough Money in your Account Balance, Add More Funds First!</p>
                                <button class="btn btn-primary bg-gradiant">Add Funds</button>

                                <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                                    <form class="was-validated" action="">
                                        <div class="mb-3">
                                            <label for="firstPlan">Change Subscription Plan:</label>
                                            <select class="form-select form-select-lg mb-3" name="plan" id="firstPlan" required>
                                                <option value="">Please, Select Subscription</option>
                                                <option value="1">1 Month ($23,99)</option>
                                                <option value="2" selected>1 Year ($143,88) -50% ($11,99/month)</option>
                                            </select>
                                            <div class="invalid-feedback">Please, Select Subscription</div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary bg-gradiant lg-btn" type="submit" disabled>Upgrade Now</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            <?php }else{ ?>
                <h1 class="text-danger text-center">What are you trying to do ? :)</h1>
                <h2 class="text-danger text-center fw-bold">You got +1 Warning!</h2>
                <h2 class="text-danger text-center">Your account will be blocked if you get 3+ more warnings!</h2>
            <?php }
    }else if ($plan_id == "3"){
        if ($price == "full"){ ?>
            <section>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-6 text-center m-auto">

                            <h4 id="balance" data-balance="<?php echo htmlspecialchars($balance);?>"
                                class="mt-5">Your Balance: $<?php echo htmlspecialchars($balance); ?></h4>

                            <h2>Chosen Plan: Pro 1 Month ($39,99))</h2>
                            <p class="text-danger">Not Enough Money in your Account Balance, Add More Funds First!</p>
                            <button class="btn btn-primary bg-gradiant">Add Funds</button>

                            <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                                <form class="was-validated" action="">
                                    <div class="mb-3">
                                        <label for="firstPlan">Change Subscription Plan:</label>
                                        <select class="form-select form-select-lg mb-3" name="plan" id="firstPlan" required>
                                            <option value="">Please, Select Subscription</option>
                                            <option value="1" selected>1 Month ($39,99)</option>
                                            <option value="2">1 Year ($239,88) -50% ($19,99/month)</option>
                                        </select>
                                        <div class="invalid-feedback">Please, Select Subscription</div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary bg-gradiant lg-btn" type="submit" disabled>Upgrade Now</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        <?php }else if ($price == "discounted"){ ?>
            <section>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-6 text-center m-auto">

                            <h4 id="balance" data-balance="<?php echo htmlspecialchars($balance);?>"
                                class="mt-5">Your Balance: $<?php echo htmlspecialchars($balance); ?></h4>

                            <h2>Chosen Plan: Pro 1 Year $239,88 -50% (1 Month ($19,99))</h2>
                            <p class="text-danger">Not Enough Money in your Account Balance, Add More Funds First!</p>
                            <button class="btn btn-primary bg-gradiant">Add Funds</button>

                            <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                                <form class="was-validated" action="">
                                    <div class="mb-3">
                                        <label for="firstPlan">Change Subscription Plan:</label>
                                        <select class="form-select form-select-lg mb-3" name="plan" id="firstPlan" required>
                                            <option value="">Please, Select Subscription</option>
                                            <option value="1">1 Month ($39,99)</option>
                                            <option value="2" selected>1 Year ($239,88) -50% ($19,99/month)</option>
                                        </select>
                                        <div class="invalid-feedback">Please, Select Subscription</div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary bg-gradiant lg-btn" type="submit" disabled>Upgrade Now</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        <?php }else{ ?>
            <h1 class="text-danger text-center">What are you trying to do ? :)</h1>
            <h2 class="text-danger text-center fw-bold">You got +1 Warning!</h2>
            <h2 class="text-danger text-center">Your account will be blocked if you get 3+ more warnings!</h2>
        <?php }
         }else{ ?>
            <h1 class="text-danger text-center">What are you trying to do ? :)</h1>
            <h2 class="text-danger text-center fw-bold">You got +1 Warning!</h2>
            <h2 class="text-danger text-center">Your account will be blocked if you get 3+ more warnings!</h2>
    <?php }
}
?>

<?php
include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>
