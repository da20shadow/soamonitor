<?php
require_once('core/init.php');

if (isset($_SESSION['username'])){

$user_id = $_SESSION['user_id'];

$user_id = $getFromFunc->checkInput($user_id);
$userInfo = $getFromUser->getUserInfo($user_id);

$balance = $userInfo['balance'];

$title ="Upgrade Plan";
$pageId = "upgrade_plan";

include ('includes/header.php');

if (isset($_GET["plan_id"]) && isset($_GET["price"])){
    $plan_id = htmlspecialchars($_GET["plan_id"]);
    $price = htmlspecialchars($_GET["price"]);



    if ($plan_id == "1"){
        if ($price == "full"){ ?>
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

                            <h4 class="mt-5">Your Balance: $<?php echo htmlspecialchars($balance); ?></h4>

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

                                <h4 class="mt-5">Your Balance: $<?php echo htmlspecialchars($balance); ?></h4>

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

                                <h4 class="mt-5">Your Balance: $<?php echo htmlspecialchars($balance); ?></h4>

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

                            <h4 class="mt-5">Your Balance: $<?php echo htmlspecialchars($balance); ?></h4>

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

                            <h4 class="mt-5">Your Balance: $<?php echo htmlspecialchars($balance); ?></h4>

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
