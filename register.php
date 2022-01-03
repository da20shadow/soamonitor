<?php
require_once('core/init.php');
if (isset($_SESSION['username'])){
    header("Location: account.php");
}else{
require_once('includes/signup.inc.php');
$title = "Create Account - SOAMonitor.com";
include ('includes/header.php');
?>
<div class="container my-5">

    <div class="row justify-content-center">

        <h2 class="text-center mb-3 fw-bold">Create An Account</h2>

        <div class="col-sm-10 col-lg-6 shadow-lg rounded-3 bg-light">

            <div class="card-body py-4">
                <h3 class="text-center text-success"><?php echo htmlspecialchars($message['success']); ?></h3>
                <h4 class="text-center text-danger"><?php echo htmlspecialchars($message['username']); ?></h4>
                <h4 class="text-center text-danger"><?php echo htmlspecialchars($message['email']); ?></h4>
                <h4 class="text-center text-danger"><?php echo htmlspecialchars($message['other']); ?></h4>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="needs-validation was-validated p-4"
                    novalidate="novalidate" method="post">

                    <div class="row g-3 justify-content-center">
                        <div class="col-10 col-lg-6 ">
                            <label class="form-label" for="regUsername">Username*</label>
                            <input class="form-control" type="text" name="username" placeholder="Username"
                                   pattern="^([a-zA-Z0-9_]{8,45})$"
                                   id="regUsername" required="required"
                                    value="<?php echo htmlspecialchars($username);?>"/>
                            <div class="invalid-feedback">Enter Username</div>
                            <div class="valid-feedback">Looks good!</div>

                        </div><!-- Username END-->
                        <div class="col-10 col-lg-6 ">

                            <label class="form-label" for="regEmail">Email*</label>
                            <input class="form-control" type="email" name="email" placeholder="Email"
                                   pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z])+[.]([a-zA-Z]{2,4})+$"
                                   id="regEmail" required="required"
                                   value="<?php echo htmlspecialchars($email);?>"/>
                            <div class="invalid-feedback">Enter Valid Email</div>
                            <div class="valid-feedback">Looks good!</div>

                        </div><!-- Email END-->
                        <div class="col-10 col-lg-6 ">
                            <label class="form-label" for="regPassword">Password*</label>
                            <input class="form-control" type="password" name="password" placeholder="Password"
                                   pattern="^([\S]{8,45})$"
                                   id="regPassword" required="required"
                                   value="<?php echo htmlspecialchars($password);?>"/>
                            <div class="invalid-feedback"><?php echo htmlspecialchars($message['password']); ?></div>
                            <div class="valid-feedback">Looks good!</div>
                        </div><!-- Password END-->
                        <div class="col-10 col-lg-6 ">
                            <label class="form-label" for="regConfirmPassword">Re-password*</label>
                            <input class="form-control" type="password" name="re-password" placeholder="Re-password"
                                   pattern="^([\S]{8,45})$"
                                   id="regConfirmPassword" required="required"/>
                            <div class="invalid-feedback"><?php echo htmlspecialchars($message['re_password']); ?></div>
                            <div class="valid-feedback">Looks good!</div>
                        </div><!-- Re-password END-->
                        <div class="col-12 mb-2">
                            <input type="checkbox" name="terms" class="form-check-input"
                                   id="termsCheckBox" value="accepted" required>
                            <label class="form-check-label" for="termsCheckBox">
                                I accept the <a href="#">terms </a>and <a href="#">privacy policy</a>
                            </label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                            <div class="valid-feedback">Thanks! <i class="bi bi-emoji-smile"></i></div>
                        </div><!-- Checkbox Terms and Conditions END -->

                        <!-- Register Button-->
                        <div class="d-grid gap-2">
                            <button id="regBtn" type="submit" name="signup" class="btn btn-primary d-block">Register</button>
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

<?php
    include("includes/footer.php");
}
?>

