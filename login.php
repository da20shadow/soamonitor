<?php
require_once('core/init.php');

if (isset($_SESSION['username'])){
    header("Location: account.php");
}else{
require_once('includes/login.inc.php');
$title = "Log in - SOAMonitor.com";
include ('includes/header.php');
?>

<div class="main">

    <div class="container my-4">

        <div class="row justify-content-center">

            <h2 class="text-center mb-3 fw-bold">Log in</h2>

            <div class="col-sm-10 col-lg-5 col-xxl-4 shadow-lg bg-light rounded-3 py-3">

                <div class="card-body py-3">

                    <h3 class="text-center text-success"><?php echo htmlspecialchars($message['success']);?></h3>
                    <h3 class="text-center text-danger"><?php echo htmlspecialchars($message['error']);?></h3>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"
                          class="needs-validation was-validated">

                        <!-- Email -->
                        <div class="mb-1">

                            <label class="form-label" for="loginEmail">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Email"
                                   pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z])+[.]([a-zA-Z]{2,4})+$"
                                   id="loginEmail" required="required"
                                   value="<?php echo htmlspecialchars($email);?>"/>
                            <div class="invalid-feedback">Enter Email!</div>
                            <div class="valid-feedback">Good!</div>

                        </div><!-- Email END-->

                        <!-- Password -->
                        <div class="mb-1">

                            <label class="form-label" for="loginPassword">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Password"
                                   id="loginPassword" required="required"
                                   value="<?php echo htmlspecialchars($password);?>"/>
                            <div id="passwordErrorMessage" class="invalid-feedback">Enter Password!</div>
                            <div class="valid-feedback">Good!</div>
                        </div><!-- Password END-->

                        <!-- Login Button-->
                        <div class="d-grid gap-2 my-4">
                            <button type="submit" name="login" class="btn btn-primary d-block">Login</button>
                        </div><!-- Login Button END -->

                        <!-- Forgot Password Link -->
                        <div class="col-12 d-flex justify-content-center">
                            <a href="forgot_password.php">Forgot password?</a>
                        </div>

                        <!-- Register Link -->
                        <div class="text-center mt-3">
                            <p>Not a member? <a href="register.php">Register</a></p>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?php
    include("includes/footer.php");
}
?>



