<?php
require_once('core/init.php');

if (isset($_SESSION['username'])){
    $title = "Delete Account - SOAMonitor.com";
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
                    <!-- Delete Account -->
                    <div class="row mt-2">

                        <!--Confirm Delete Account -->
                        <div class="card border bg-white rounded-3 mb-0">
                            <!-- Card header -->
                            <div class="card-header bg-transparent border-bottom">
                                <h3 class="card-header-title mb-0">Delete Account</h3>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <h6>Before you go...</h6>
                                <ul>
                                    <li>If you delete your account, you will lose your all data.</li>
                                </ul>
                                <div class="form-check form-check-md my-4">
                                    <input class="form-check-input" type="checkbox" value="" id="deleteaccountCheck">
                                    <label class="form-check-label" for="deleteaccountCheck">Yes, I'd like to delete my account</label>
                                </div>
                                <a href="account.php" class="btn btn-outline-success mb-2 mb-sm-0">Keep my account</a>
                                <a href="#" class="btn btn-danger mb-0">Delete my account</a>
                            </div>
                        </div>
                        <!-- Title and select END -->

                        <!--Confirm Delete Account -->

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


