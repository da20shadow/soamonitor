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

                    <div class="needs-validation was-validated" id="addInvForm">

                        <div>

                            <label class="form-label" for="projectName">Project Name</label>
                            <input class="form-control" type="text" name="project_name" placeholder="Project Name"
                                   pattern="^([a-zA-Z0-9_ ]{5,45})$"
                                   id="projectName" required="required"/>

                            <div class="invalid-feedback">Enter Project Name!</div>
                            <div class="valid-feedback">Good!</div>

                        </div><!-- Project Name END-->
                        <div>
                            <label class="form-label" for="deposit">Deposit</label>
                            <input class="form-control" type="number" step="0.01" name="deposit" placeholder="$120.00"
                                   id="deposit" required="required"/>
                            <div class="invalid-feedback">Enter Deposit!</div>
                            <div class="valid-feedback">Good!</div>
                        </div><!-- Deposit END-->
                        <!-- Add Button-->
                        <div class="row g-2 my-1">
                            <button id="addProject" type="submit" name="add" class="btn btn-success">Add</button>
                        </div>
                    </div>

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
