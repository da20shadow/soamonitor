<?php
require_once('core/init.php');

if (isset($_SESSION['username'])){
$title = "Add New Investment - SOAMonitor.com";
include ('includes/header.php');
?>

<div class="main">

    <div class="container my-4">

        <div class="row justify-content-center">

            <h2 class="text-center mb-3 fw-bold">Add New Investment</h2>

            <div class="col-sm-10 col-lg-5 col-xxl-4 shadow-lg bg-light rounded-3 py-3">

                <div class="card-body py-3">

                    <form action="includes/login.inc.php" method="post"
                          class="needs-validation was-validated"
                          onsubmit="return addInvestmentFormValidation()">

                        <!-- Project Name -->
                        <div class="mb-2">

                            <label class="form-label" for="projectName">Project Name</label>
                            <input class="form-control" type="text" name="project_name" placeholder="Project Name"
                                   pattern="^([a-zA-Z0-9_ ]{5,45})$"
                                   id="projectName" required="required"/>

                            <div id="InvestmentErrorMessage" class="invalid-feedback">
                                Enter Project Name!
                            </div>

                        </div><!-- Email END-->
                        <div class="mb-2">

                            <label class="form-label" for="deposit">Deposit</label>
                            <input class="form-control" type="number" step="0.01" name="deposit" placeholder="$120.00"
                                   id="deposit" required="required"/>

                            <div id="depositErrorMessage" class="invalid-feedback">
                                Enter Deposit!
                            </div>

                        </div><!-- Password END-->

                        <!-- Add Button-->
                        <div class="row g-2 my-4">
                            <button type="submit" name="add" class="btn btn-success ">Add</button>
                            <button type="button" class="btn btn-primary" onclick="window.location='my_investments.php'">
                                <i class="bi bi-arrow-return-left"></i> Back</button>
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
