<?php
require_once('core/init.php');
$title = "SOAMonitor.com";
include ('includes/header.php');
?>
<div class="container my-5">
    <div class="row justify-content-center align-items-center position-relative">

        <!-- Header Title & Description -->
        <div class="col-lg-6 col-md-12 position-relative mb-5">
            <h1 class="fw-bold">The Best Place to Write,  Read, Learn and Earn</h1>

            <p class="my-4 lead">Some text some text,
                some text text  some text etc and little more text here because is needed of course
                it’s can be without this paragraph.
            </p>

            <button class="btn btn-primary bg-gradient btn-lg shadow-sm" data-bs-toggle="button"
                    onclick="window.location.href='register.php'">Get Started</button>
        </div>
        <!-- Header Title & Description END -->

        <!-- Header Image -->
        <div class="col-lg-6 col-md-12 text-center position-relative">
            <div class="position-relative">
                <img src="assets/img/remote-work.png" class="img-fluid" alt="Remote Work" width="445" height="400">
            </div>
        </div>
        <!-- Header Image END -->

    </div>
</div><!--Header Title/Description and Image END-->
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

        <!-- Total Subscribers -->
        <div class="col">
            <div class="stat stat-heart d-flex justify-content-center align-items-center
            shadow-sm">
                <span class="display-4">
                    <i class="bi bi-heart"></i>
                </span>
                <div class="ms-4 h6 fw-normal">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0 fw-bold">4.8</h4>
                        <h4 class="mb-0 fw-bold">K</h4>
                    </div>
                    <h5>Subscribers</h5>
                </div>
            </div>
        </div>
        <!-- Total Subscribers END -->

        <!-- Total Paid in Contests -->
        <div class="col">
            <div class="stat stat-coin d-flex justify-content-center align-items-center
            shadow-sm">
                <span class="display-4">
                    <i class="bi bi-cash-coin"></i>
                </span>
                <div class="ms-4 h6 fw-normal">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0 fw-bold">$213.32</h4>
                    </div>
                    <h5>Paid in Contests</h5>
                </div>
            </div>
        </div>
        <!-- Total Paid in Contests END -->

        <!-- Total Reviews -->
        <div class="col">
            <div class="stat stat-reviews d-flex justify-content-center align-items-center
            shadow-sm">
                <span class="display-4">
                    <i class="bi bi-star-half"></i>
                </span>
                <div class="ms-4 h6 fw-normal">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0 fw-bold">125</h4>
                    </div>
                    <h5>Reviews</h5>
                </div>
            </div>
        </div>
        <!-- Total Reviews END -->

        <!-- Total Members -->
        <div class="col">
            <div class="stat stat-members d-flex justify-content-center align-items-center
            shadow-sm">
                <span class="display-4">
                    <i class="bi bi-people"></i>
                </span>
                <div class="ms-4 h6 fw-normal">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0 fw-bold">12</h4>
                    </div>
                    <h5>Members</h5>
                </div>
            </div>
        </div>
        <!-- Total Members END -->

    </div>
</div><!-- Blog Statistics END -->
<div class="bg-white">
    <div class="container mt-5 pt-5 border-top">

        <div class="row">

            <div class="col-12 col-md-8">
                <!-- Title -->
                <h2 class="fs-1 text-center me-5 fw-bold"><i class="bi bi-graph-up"></i> Trending on SOA monitor</h2>
                <p class="text-center">Check out most 🔥 posts in the blog</p>
                <!-- Title END-->

                <div class="card mb-3 post">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="view_article.php">
                                <img src="assets/img/post.png" class="img-fluid rounded-start" alt="...">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="view_article.php" class="text-decoration-none">
                                    <h5 class="card-title">Card title</h5>
                                </a>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-sm rounded bg-white border mt-1 me-5">Category</a>
                                <a href="#" class="btn btn-sm rounded bg-white border mt-1">#Tag</a>
                                <a href="#" class="btn btn-sm rounded bg-white border mt-1">#Tag2</a>
                                <p class="card-text mt-3">
                                    <small class="text-muted d-block d-md-inline me-5 py-1 py-md-0">32<i class="bi bi-chat ms-1"></i></small>
                                    <small class="text-muted d-block d-md-inline me-5 py-1 py-md-0"><i class="bi bi-calendar me-2"></i>06/01/2022 </small>
                                    <small class="text-muted d-block d-md-inline me-5 py-1 py-md-0">
                                        <a class="position-relative p-0 d-inline-block text-decoration-none text-muted"
                                           href="profile.php?profile_id=1">
                                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="24" alt="Avatar" />
                                            Username
                                        </a>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!--Post END -->
                <div class="card mb-3 post">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/img/remote-work.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-sm rounded bg-white border mt-1 me-5">Category</a>
                                <a href="#" class="btn btn-sm rounded bg-white border mt-1">#Tag</a>
                                <a href="#" class="btn btn-sm rounded bg-white border mt-1">#Tag2</a>
                                <p class="card-text mt-3">
                                    <small class="text-muted d-block d-md-inline me-5 py-1 py-md-0">32<i class="bi bi-chat ms-1"></i></small>
                                    <small class="text-muted d-block d-md-inline me-5 py-1 py-md-0"><i class="bi bi-calendar me-2"></i>06/01/2022 </small>
                                    <small class="text-muted d-block d-md-inline me-5 py-1 py-md-0">
                                        <a class="position-relative p-0 d-inline-block text-decoration-none text-muted"
                                           href="#">
                                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="24" alt="Avatar" />
                                            Username
                                        </a>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!--Post END -->

                <!--The Featured Ad Space-->
                <?php include "template/featured_ad_space.php"; ?>

            </div>
            <!-- Right Sidebar -->
            <div class="col-12 col-md-4 text-center">
                <p class="text-uppercase fw-bold">Discover more of what matters to you</p>
                <button class="btn rounded bg-white border mt-1">Category</button>
                <button class="btn rounded bg-white border mt-1">Category 2</button>
                <button class="btn rounded bg-white border mt-1">Category 3</button>
                <button class="btn rounded bg-white border mt-1">Category 4</button>
                <button class="btn rounded bg-white border mt-1">Category 5</button>
                <hr class="divider">
                <p class="text-uppercase fw-bold"><i class="bi bi-trophy"></i> TOP Members</p>
                <p>1. Aayafi - 5400 <i class="bi bi-coin text-warning"></i></p>
                <p>2. Bhavin - 4400 <i class="bi bi-coin text-warning"></i></p>
                <p>3. Mhary - 3400 <i class="bi bi-coin text-warning"></i></p>
                <p>4. Praven - 2400 <i class="bi bi-coin text-warning"></i></p>
                <p>5. Praven - 2400 <i class="bi bi-coin text-warning"></i></p>
                <a href="#">View All..</a>

                <!--image ad space -->
                <?php include "template/image_ad_space.php"; ?>
        </div>
    </div>
</div><!-- Trending Posts Left Bar END-->
<?php include("includes/footer.php"); ?>
