<?php
require_once('core/init.php');
if (isset($_SESSION['username'])){
    $title = "Add New Ad - SOAMonitor.com";
    include ('includes/header.php');
    ?>
    <div class="main">

        <div class="container my-4">

            <div class="row justify-content-center">

                <h2 class="text-center mb-3 fw-bold">Edit Ad</h2>

                <div class="col-sm-10 col-lg-6 col-xxl-5 shadow-lg bg-light rounded-3 py-3">

                    <div id="editAdCard" class="card-body py-3">

                        <form action="includes/login.inc.php" method="post"
                              class="needs-validation was-validated">

                            <!-- Ad Title -->
                            <div class="mb-2">

                                <label class="form-label" for="editAdTitle">Ad title</label>
                                <input class="form-control" type="text" name="ad_title" placeholder="Ad Title"
                                       pattern="^([a-zA-Z0-9$.?!,: ]{15,75})$"
                                       id="editAdTitle" required="required"/>

                                <div id="InvestmentErrorMessage" class="invalid-feedback">
                                    Enter Ad Title!
                                </div>

                            </div><!-- Ad Title END-->
                            <div class="form-floating mb-2">

                                <textarea class="form-control" id="editAdDescription" style="height: 100px" required></textarea>
                                <label for="editAdDescription">Ad Description</label>

                            </div><!-- Ad Description END-->
                            <div class="mb-2">
                                <select class="form-select" required aria-label="select category">
                                    <option value="">Ad Category</option>
                                    <option value="1">PTC site</option>
                                    <option value="2">Risky Investment</option>
                                    <option value="3">RevShare</option>
                                    <option value="4">Other</option>
                                </select>
                                <div class="invalid-feedback">Please, select ad Category!</div>
                            </div><!--Select Ad Category-->
                            <div class="mb-2">
                                <select id="adTypeSelect" class="form-select" required aria-label="Select ad type">
                                    <option value="">Select Ad Type</option>
                                    <option value="Featured_Ad">1 Week Featured Text Ad - $13 USD</option>
                                    <option value="Image_Ad">1 Week Featured Text Ad with Image - $15 USD</option>
                                </select>
                                <div class="invalid-feedback">Please, select ad type!</div>
                            </div><!--Select Ad Type-->
                            <div id="adImgUrl" class="mb-2"></div><!-- Image URL-->

                            <!-- Add Button-->
                            <div class="row g-2 my-4">
                                <button id="addAdBtn" type="submit" name="add" class="btn btn-primary bg-gradient">Save Changes</button>
                                <button type="button" class="btn btn-secondary bg-gradient" onclick="window.location='my_ads.php'">
                                    <i class="bi bi-arrow-return-left"></i> Back To My Ads</button>
                            </div><!-- Login Button END -->


                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>