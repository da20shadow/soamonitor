<?php
require_once('core/init.php');
if (isset($_SESSION['username'])){
$title = "Promo Tools - SOAMonitor.com";
include ('includes/header.php');
?>
<?php echo $title;?>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-5 text-center">
                <h1>Promo Tools</h1>

                <button class="n-btn">Default Button</button>

            </div>
        </div>
    </div>

<?php include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>