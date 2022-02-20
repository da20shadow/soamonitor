<?php
require_once('core/init.php');

$category = 1; //1 - News, 2 - Test
$posts = $getFromPost->getAllPostFromCategory($category);

$title = "News & Updates - SOAMonitor.com";
include ('includes/header.php');
?>
    <div class="container-fluid">
        <h1 class="text-center">News & Updates</h1>

        <?php
        if ($posts){ ?>
            <div class="row g-3 justify-content-center">
                <?php  foreach ($posts as $article) { ?>

                    <div class="card mx-2" style="width: 18rem;">
                        <img src="assets/img/post.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($article['title']); ?></h5>
                            <p class="card-text">
                                <?php echo htmlspecialchars($article['meta_description']); ?>
                            </p>
                            <a href="#" class="btn btn-primary">Read More..</a>
                        </div>
                    </div>

                    <?php
                } ?>
            </div>
            <?php
        }
        ?>
    </div>

<?php include("includes/footer.php"); ?>