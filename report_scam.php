<?php
require_once('core/init.php');
if (isset($_SESSION['username'])){
    $title = "Report SCAM - SOAMonitor.com";
    include ('includes/header.php');
    ?>
    <div class="main">

        <div class="container my-4">

            <div class="row justify-content-center">

                <h2 class="text-center mb-3 fw-bold text-danger">Report SCAM! <i class="bi bi-exclamation-triangle"></i></h2>

                <div class="col-sm-10 col-lg-6 col-xxl-5 shadow-lg bg-light rounded-3 py-3">

                    <div id="addNewAdCard" class="card-body py-3">

                        <form action="includes/login.inc.php" method="post"
                              class="needs-validation was-validated">

                            <!-- Scam site Name -->
                            <div class="mb-2">

                                <label class="form-label" for="scam_name">SCAM Name</label>
                                <input class="form-control" type="text" name="scam_name" placeholder="SCAM Name"
                                       pattern="^([a-zA-Z0-9$.?!,: ]{15,41})$"
                                       id="scam_name" required="required"/>

                                <div class="invalid-feedback">Enter Scam Name!</div>

                            </div><!-- Scam site Name END-->
                            <div class="mb-2">

                                <label class="form-label" for="scam_url">SCAM URL</label>
                                <input class="form-control" type="text" name="scam_url" placeholder="SCAM Site URL"
                                       pattern="https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{2,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)"
                                       id="scam_url" required="required"/>

                                <div class="invalid-feedback">Enter Scam Site URL!</div>

                            </div><!-- Scam site URL END-->
                            <div class="form-floating mb-2">

                                <textarea class="form-control" id="scDescription" style="height: 100px" required></textarea>
                                <label for="scDescription">Description</label>

                            </div><!-- Sc Description END-->
                            <div class="mb-2">
                                <select class="form-select" required aria-label="select example">
                                    <option value="">Category</option>
                                    <option value="1">Risky Investment</option>
                                    <option value="2">PTC site</option>
                                    <option value="3">PTA Site</option>
                                    <option value="4">Other</option>
                                </select>
                                <div class="invalid-feedback">Please, select Category!</div>
                            </div><!--Select Ad Category-->
                            <!-- Report Button-->
                            <div class="row g-2 my-4">
                                <button type="submit" name="add" class="btn btn-danger ">Report</button>
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