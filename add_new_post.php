<?php
require_once('core/init.php');

if (isset($_SESSION['username'])){
$title = "Add New Post SOAMonitor.com";
include('includes/header.php');
echo $title;?>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-5 text-center">
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>

            <p>This is add new blog post page!</p>

            <a href="index.php" class="btn">Back To Home</a>
            <br>
            <button class="n-btn">Default Button</button>
            <br>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>
