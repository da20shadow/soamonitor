<?php
require_once('core/init.php');
if (isset($_SESSION['username'])){
$title = "Upgrade Account - SOAMonitor.com";
include ('includes/header.php');
?>
<?php echo $title;?>

    <div class="container">

<!--            <input type="text" id="imeto">-->
<!--            <input type="text" id="sumata">-->
<!--            <button id="butona">Click</button>-->

        <p id="resultata"></p>

    </div>
    <div class="col-12 col-md-3">
        <a href="add_new_investment.php"
           class="btn btn-primary btn-sm ms-5"
           data-bs-toggle="modal" data-bs-target="#modala">
            <i class="bi bi-plus-lg me-2"></i> Add New Project</a>
    </div>
    <div class="modal fade" id="modala" tabindex="-1"
         aria-labelledby="modala" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Add New Investment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body py-3">
                        <div class="needs-validation was-validated"
                              id="nqkvaForma">

                            <div>

                                <label class="form-label" for="imeto">Project Name</label>
                                <input class="form-control" type="text" name="project" placeholder="Project Name"
                                       pattern="^([a-zA-Z0-9_ ]{5,45})$"
                                       id="imeto" required="required"/>

                                <div class="invalid-feedback">Enter Project Name!</div>
                                <div class="valid-feedback">Good!</div>

                            </div><!-- Project Name END-->
                            <div>
                                <label class="form-label" for="sumata">Deposit</label>
                                <input class="form-control" type="number" step="0.01" name="sumata" placeholder="$120.00"
                                       id="sumata" required="required"/>
                                <div class="invalid-feedback">Enter Deposit!</div>
                                <div class="valid-feedback">Good!</div>
                            </div><!-- Deposit END-->
                            <!-- Add Button-->
                            <div class="row g-2 my-1">
                                <button id="butona" type="submit" name="butona" class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#butona').click(function(){
                let project = $('#imeto').val();
                let deposit = $('#sumata').val();
                $.post('../includes/add_project.ini.php',
                    {project:project,deposit:deposit}, function(data,status){
                        $('#resultata').html(data);
                    });
            });
        });
    </script>

<?php include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>