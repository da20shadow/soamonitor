<?php
$title = "Create Account - SOAMonitor.com";
include ('includes/header.php');
?>
<div class="container my-4">

    <div class="row justify-content-center">

        <h2 class="text-center mb-3 fw-bold">Create An Account</h2>

        <div class="col-sm-10 col-lg-6 shadow-lg rounded-3 pr-4 bg-light">

            <div class="card-body py-4">

                <form action="includes/signup.inc.php" class="needs-validation was-validated"
                    novalidate="novalidate" method="post"
                    onsubmit="return regFormValidation()">

                    <div class="row g-3 justify-content-center">

                        <!-- Username -->
                        <div class="col-10 col-lg-6 mb-2">

                            <label class="form-label" for="regUsername">Username*</label>
                            <input class="form-control" type="text" name="username" placeholder="Username"
                                   pattern="^([a-zA-Z0-9_]{5,45})$"
                                   id="regUsername" required="required"/>

                            <div id="regUsernameErrorMessage" class="invalid-feedback">
                                Enter Username!
                            </div>

                        </div><!-- Username END-->

                        <!-- Email -->
                        <div class="col-10 col-lg-6 mb-2">

                            <label class="form-label" for="regEmail">Email*</label>
                            <input class="form-control" type="email" name="email" placeholder="Email"
                                   pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z])+[.]([a-zA-Z]{2,4})+$"
                                   id="regEmail" required="required"/>

                            <div id="regEmailErrorMessage" class="invalid-feedback">
                                Enter Email!
                            </div>

                        </div><!-- Email END-->

                        <!-- Password -->
                        <div class="col-10 col-lg-6 mb-2">

                            <label class="form-label" for="regPassword">Password*</label>
                            <input class="form-control" type="password" name="password" placeholder="Password"
                                   id="regPassword" required="required"/>

                            <div id="regPasswordErrorMessage" class="invalid-feedback">
                                Enter Password!
                            </div>

                        </div><!-- Password END-->

                        <!-- Re-password -->
                        <div class="col-10 col-lg-6 mb-2">

                            <label class="form-label" for="regConfirmPassword">Re-password*</label>
                            <input class="form-control" type="password" name="re-password" placeholder="Re-password"
                                   id="regConfirmPassword" required="required"/>

                            <div id="regConfirmPasswordErrorMessage" class="invalid-feedback">
                                Passwords must match!
                            </div>

                        </div><!-- Re-password END-->

                        <!-- Checkbox Terms and Conditions -->
                        <div class="col-12 mb-2">
                            <input type="checkbox" name="terms" class="form-check-input" id="termsCheckBox" required>
                            <label class="form-check-label" for="termsCheckBox">
                                I accept the <a href="#">terms </a>and <a href="#">privacy policy</a>
                            </label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>

                        <!-- Register Button-->
                        <div class="d-grid gap-2 my-4">
                            <button type="submit" name="signup" class="btn btn-primary d-block">Register</button>
                        </div><!-- Register Button END -->

                        <!-- Login Link -->
                        <div class="text-center mt-3">
                            <p>Already a member? <a href="login.php">Login</a></p>
                        </div>

                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>

