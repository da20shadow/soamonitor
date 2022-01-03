<?php
require_once('core/init.php');
$title = "Reset Password - SOAMonitor.com";
include ('includes/header.php');
?>

<div class="main">

    <div class="container my-4">

        <div class="row justify-content-center">

            <h2 class="text-center mb-3 fw-bold">Reset Password</h2>

            <div class="col-sm-10 col-lg-5 col-xxl-4 shadow-lg bg-light rounded-3 py-3">

                <div class="card-body py-3">

                    <form action="includes/reset_password.inc.php" method="post"
                          class="needs-validation was-validated">
                        <!-- Email -->
                        <div class="mb-2">
                            <label class="form-label" for="resetPassword">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Email"
                                   pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z])+[.]([a-zA-Z]{2,4})+$"
                                   id="resetPassword" required="required"/>

                            <div class="invalid-feedback">Enter Email!</div>
                            <div class="valid-feedback">Good!</div>

                        </div><!-- Email END-->

                        <!-- Reset Button-->
                        <div class="d-grid gap-2 my-4">
                            <button type="submit" name="reset-password" class="btn btn-primary d-block">Reset Password</button>
                        </div><!-- Reset Button END -->

                        <!-- Login Link -->
                        <div class="text-center mt-3">
                            <p>Back To <a href="login.php">Login</a></p>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include("includes/footer.php"); ?>
