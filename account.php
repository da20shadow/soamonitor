<?php
require_once('core/init.php');

if (isset($_SESSION['username'])){

$title = "Account - SOAMonitor.com";
$pageId = "account";
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
                    <div class="col-sm-6 col-lg-4">
                        <div class="stat stat-heart d-flex justify-content-center align-items-center shadow-sm">
                            <span class="display-4">
                                <i class="bi bi-coin"></i>
                            </span>
                            <div class="ms-4 h6 fw-normal">
                                <div class="d-flex align-items-center my-2">
                                    <h4 class="mb-0 fw-bold"><?php echo htmlspecialchars($points);?></h4>
                                </div>
                                <button class="btn btn-warning bg-gradient btn-sm shadow-sm"
                                        data-bs-toggle="modal" data-bs-target="#convertPoints">
                                    Convert Coins</button>
                            </div>
                        </div>
                    </div><!--Points Balance END-->
                    <div class="col-sm-6 col-lg-4">
                        <div class="stat stat-reviews d-flex justify-content-center align-items-center
            shadow-sm">
                            <span class="display-4">
                                <i class="bi bi-cash-coin"></i>
                            </span>
                            <div class="ms-4 h6 fw-normal">
                                <div class="d-flex align-items-center my-2">
                                    <h4 class="mb-0 fw-bold">$<?php echo htmlspecialchars($balance);?></h4>
                                </div>
                                <button class="btn btn-sm bg-gradient shadow-sm" onclick="location.href='add_funds.php'">Add Funds</button>

                            </div>
                        </div>
                    </div><!--Account Balance-->
                    <div class="col-sm-6 col-lg-4">
                        <div class="stat stat-members d-flex justify-content-center align-items-center
            shadow-sm">
                            <span class="display-4">
                                <i class="bi bi-people"></i>
                            </span>
                            <div class="ms-4 h6 fw-normal">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0 fw-bold"><?php echo htmlspecialchars($totalReferrals);?></h4>
                                </div>
                                <h5>Referrals</h5>
                            </div>
                        </div>
                    </div><!--Total Referrals-->
                </div>
                <!-- Points chart & points info -->
                <div class="row mt-5">

                    <div class="col-12">

                        <div class="card card-body bg-transparent border p-4 h-100">

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            How To Earn Coins?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body bg-light">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            How Much Are 1000 Coins Worth?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body bg-light">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            What is Тhe Minimum Amount of Points For Converting To USD?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body bg-light">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                            </div><!--Short Points info END-->

                            <!--The Featured Ad Space-->
                            <?php include "template/featured_ad_space.php"; ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- Convert Points Modal -->
    <div class="modal fade" id="convertPoints" tabindex="-1"
         aria-labelledby="convertPoints" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Convert Points To Cash</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h4 class="text-center text-success" id="convertedPointsSuccess"></h4>

                    <div id="convertPointsForm"
                          class="needs-validation was-validated">
                        <span class="form-control text-center border-bottom-0">You have: <?php echo htmlspecialchars($points);?> Points</span>
                        <div class="m-2">
                            <label class="form-label" for="points">Points</label>
                            <input class="form-control is-invalid" type="number" name="points" placeholder="100"
                                   pattern="^([0-9]){4,20}$"
                                   id="points" required="required" onkeyup="calculateConvertedPoints(this.value)"/>
                            <div id="errorPoints" class="invalid-feedback">Enter Amount Of Points!</div>

                        </div><!-- Points to convert END-->
                        <span class="form-control text-center border-bottom-0">You will get:</span>
                        <div class="input-group mb-3">
                            <p id="convertedPoints" class="form-control text-center">Points to $0.00 USD</p>
                        </div><!-- points in dollars END-->
                        <!-- Save Button-->
                        <div class="row g-2 m-2">
                            <button id="convertPointsBtn" type="submit" name="convert" class="btn btn-primary bg-gradient"><i class="bi bi-arrow-repeat me-2"></i>Convert</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary bg-gradient" data-bs-dismiss="modal">Close</button>
                </div>
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


