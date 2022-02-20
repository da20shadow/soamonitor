<?php
require_once('core/init.php');
if (isset($_SESSION['username'])){
    $title = "Add Funds - SOAMonitor.com";
    $pageId = "add_funds";
    include ('includes/header.php');
    ?>
    <div class="main">

        <div class="container my-4">

            <div class="row justify-content-center">

                <h2 class="text-center mb-3 fw-bold">Add Funds <i class="bi bi-coin"></i></h2>

                <div class="col-sm-10 col-lg-6 col-xxl-5 shadow-lg bg-light rounded-3 py-3">

                    <div id="addNewAdCard" class="card-body py-3">

                        <form action="includes/login.inc.php" method="post"
                              class="needs-validation was-validated">

                            <!-- Add Funds -->
                            <div class="mb-2">

                                <label class="form-label" for="addFundsAmount">Amount</label>
                                <input class="form-control" type="number" step="0.01" name="deposit" placeholder="$10.00"
                                       id="addFundsAmount" required="required"/>

                                <div id="addFundsErrorMessage" class="invalid-feedback">Enter Amount!</div>
                                <div id="addFundsSuccessMessage" class="valid-feedback">OK!</div>

                            </div><!-- Add Funds END-->
                            <div class="mb-2">
                                <select class="form-select" required aria-label="select example">
                                    <option value="">Select Payment Method</option>
                                    <option value="pm">PerfectMoney</option>
                                    <option value="py">Payeer</option>
                                </select>
                                <div class="invalid-feedback">Please, select Payment Method!</div>
                                <div class="valid-feedback">OK!</div>
                            </div><!--Select Payment Method-->
                            <!-- Add Funds Button-->
                            <div class="row g-2 my-4">
                                <button id="addFundsBtn" type="submit" name="add" class="btn btn-primary bg-gradient">Add Funds</button>
                            </div><!-- Add Funds Button END -->


                        </form>

                    </div>

                </div>

            </div>

            <!--The Featured Ad Space-->
            <?php include "template/featured_ad_space.php"; ?>
        </div>

    </div>

    <?php include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>