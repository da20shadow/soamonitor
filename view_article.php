<?php
require_once('core/init.php');

$username = "You are logged in as " . $_SESSION['username'] ?? "Please login to comment.";

$title = "Article - SOAMonitor.com";
$pageId = "view_article";
include ('includes/header.php');
?>
<div class="container mt-3 bg-white">

    <div class="row g-4">

        <div class="col-12 col-md-9">

            <div class="p-3">

                <h1 class="article-title">Article Title</h1>

                <div class="d-flex justify-content-start flex-wrap">
                    <small class="me-3"><i class="bi bi-person-circle"></i> Author</small>
                    <small class="me-3"><i class="bi bi-calendar-fill"></i> December 12, 2021</small>
                    <small class="me-3"><i class="bi bi-clock-fill"></i> 2:54 pm</small>
                    <small class="me-3"><i class="bi bi-tag-fill"></i> Category</small>
                    <small class="me-3"><i class="bi bi-chat-dots-fill"></i> 8 Comments</small>
                </div>

                <div class="d-flex justify-content-center my-3">
                    <img src="assets/img/post.png" class="img-fluid shadow" alt="..." style="max-width: 80%;">
                </div>

                <div class="ms-3 mt-5">
                    <h2>Some Heading 2 Here</h2>

                    <p class="lh-1">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
                    <p class="lh-sm">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
                    <p class="lh-base">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
                    <p class="lh-lg">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>

                    <h2>And Some Heading 2 Here</h2>

                    <p class="lh-1">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
                    <p class="lh-sm">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
                    <p class="lh-base">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>
                    <p class="lh-lg">This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.</p>

                </div><!-- Article Body -->

            </div>

            <hr class="divider">

            <div class="d-flex justify-content-end mx-3">
                <small class="text-right"><?php echo htmlspecialchars($username);?> | <a href="logout.php">Log out</a></small>
            </div>

            <div class="form-floating mt-4 mx-3">
                <textarea class="form-control" placeholder="Join the discussion" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Add Comment</label>
            </div>

            <div class="d-flex justify-content-end mt-2">
                <button type="button" class="btn btn-outline-primary">Post comment</button>
            </div>

            <h5 class="ms-3">8 Comments</h5>
            <hr class="divider">
            <section class="mt-2">

                <!--Comment start-->
                <div class="row mt-3 m-auto">

                    <div class="col-12 col-md-2 text-center ">
                            <div class="row">
                                <a class="position-relative p-0 d-inline-block" href="#">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="48" alt="Avatar"/>
                                </a>
                            </div>
                            <div class="row">
                                <small class="px-1 m-2" style="font-size:13px;">@username</small>
                            </div>
                            <div class="row">
                                <small class="border border-dark px-1" style="font-size:13px;"><i class="bi bi-gem"></i> VIP Member</small>
                            </div>

                    </div><!--Avatar username & Membership Info-->

                    <div class="col-12 col-md-9">

                            <div class="row">

                                <div class=" align-bottom mb-2">
                                    <strong class="text-primary me-2">John Doe</strong>
                                    <small class="border rounded-3 border-success text-success px-2 me-2" style="font-size:13px;">
                                        <i class="bi bi-circle-fill text-success"></i>
                                        Online
                                    </small>
                                    <small class="text-muted"><i class="bi bi-clock"></i> 4 days ago</small>
                                </div>

                            </div><!-- Author name and comment info -->

                            <div class="row">

                                <p class="text-secondary mb-1">
                                    This is the comment content here...This is the comment content here...
                                    This is the comment content here...This is the comment content here...
                                    This is the comment content here...This is the comment content here...
                                </p>
                                <span id="reply_1" class="text-primary" style="cursor:pointer;">
                                    <i class="bi bi-reply"></i>Reply
                                </span>

                                <div id="commentBox"></div>

                            </div><!-- Comment text content -->

                    </div><!-- Comment body end-->

                    <div class="row mt-3 ms-3 m-auto">

                            <div class="col-12 col-md-2 text-center">
                                <div class="row">
                                    <a class="position-relative p-0 d-inline-block" href="#">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="48" alt="Avatar"/>
                                    </a>
                                </div>
                                <div class="row">
                                    <small class="px-1 m-2" style="font-size:13px;">@username</small>
                                </div>
                                <div class="row">
                                    <small class="border border-dark px-1" style="font-size:13px;"><i class="bi bi-gem"></i> VIP Member</small>
                                </div>

                            </div><!--Avatar username & Membership-->

                            <div class="col-12 col-md-9">

                                <div class="row">

                                    <div class=" align-bottom mb-2">
                                        <strong class="text-primary me-2">John Doe</strong>
                                        <small class="border rounded-3 border-danger text-danger px-2 me-2" style="font-size:13px;">
                                            <i class="bi bi-circle-fill text-danger"></i>
                                            Offline
                                        </small>
                                        <small class="text-muted"><i class="bi bi-clock"></i> 4 days ago</small>
                                    </div>

                                </div><!-- Author name and comment info -->

                                <div class="row">

                                    <small>In reply to: John Doe</small>
                                    <p class="text-secondary mb-1">
                                        This is the comment content here...This is the comment content here...
                                        This is the comment content here...This is the comment content here...
                                        This is the comment content here...This is the comment content here...
                                    </p>
                                    <a href="#" class="text-decoration-none"><i class="bi bi-reply"></i>Reply</a>

                                </div><!-- comment content -->

                            </div><!--comment body -->

                            <div class="row mt-3 ms-3 m-auto">

                            <div class="col-12 col-md-2 text-center">
                                <div class="row">
                                    <a class="position-relative p-0 d-inline-block" href="#">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="48" alt="Avatar"/>
                                    </a>
                                </div>
                                <div class="row">
                                    <small class="px-1 m-2" style="font-size:13px;">@username</small>
                                </div>
                                <div class="row">
                                    <small class="border border-dark px-1" style="font-size:13px;"><i class="bi bi-gem"></i> VIP Member</small>
                                </div>

                            </div><!--Avatar username & Membership-->

                            <div class="col-12 col-md-9">

                                <div class="row">

                                    <div class=" align-bottom mb-2">
                                        <strong class="text-primary me-2">John Doe</strong>
                                        <small class="border rounded-3 border-danger text-danger px-2 me-2" style="font-size:13px;">
                                            <i class="bi bi-circle-fill text-danger"></i>
                                            Offline
                                        </small>
                                        <small class="text-muted"><i class="bi bi-clock"></i> 4 days ago</small>
                                    </div>

                                </div><!-- Author name and comment info -->

                                <div class="row">

                                    <small>In reply to: John Doe</small>
                                    <p class="text-secondary mb-1">
                                        This is the comment content here...This is the comment content here...
                                        This is the comment content here...This is the comment content here...
                                        This is the comment content here...This is the comment content here...
                                    </p>
                                    <a href="#" class="text-decoration-none"><i class="bi bi-reply"></i>Reply</a>

                                </div><!-- comment body -->

                            </div>

                        </div><!--Reply Comment-->

                        </div><!--Reply Comment-->

                </div>
                <!--Comment end-->

                <div class="row mt-3 m-auto">

                    <div class="col-12 col-md-2 text-center ">
                        <div class="row">
                            <a class="position-relative p-0 d-inline-block" href="#">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="48" alt="Avatar"/>
                            </a>
                        </div>
                        <div class="row">
                            <small class="px-1 m-2" style="font-size:13px;">@username</small>
                        </div>
                        <div class="row">
                            <small class="border border-dark px-1" style="font-size:13px;"><i class="bi bi-gem"></i> VIP Member</small>
                        </div>

                    </div><!--Avatar username & Membership-->
                    <div class="col-12 col-md-9">

                        <div class="row">

                            <div class=" align-bottom mb-2">
                                <strong class="text-primary me-2">John Doe</strong>
                                <small class="border rounded-3 border-success text-success px-2 me-2" style="font-size:13px;">
                                    <i class="bi bi-circle-fill text-success"></i>
                                    Online
                                </small>
                                <small class="text-muted"><i class="bi bi-clock"></i> 4 days ago</small>
                            </div>

                        </div><!-- Author name and comment info -->

                        <div class="row">

                            <p class="text-secondary mb-1">
                                This is the comment content here...This is the comment content here...
                                This is the comment content here...This is the comment content here...
                                This is the comment content here...This is the comment content here...
                            </p>
                            <a href="#" class="text-decoration-none"><i class="bi bi-reply"></i>Reply</a>

                        </div><!-- Comment content -->

                    </div><!-- Comment body -->

                </div>
                <!--Comments end-->

                <!--Pagination start-->
                <nav class="mt-3" aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!--Pagination end-->

            </section><!--Comments section-->
            <!--The Featured Ad Space-->
            <?php include "template/featured_ad_space.php"; ?>
        </div>

        <!--Side bar start-->
        <div class="col-12 col-md-3">

            <div class="p-3">

                <p class="text-uppercase fw-bold">Discover more of what matters to you</p>
                <h6 class="border-bottom lh-lg text-decoration-none text-secondary">
                    <a href="#" class="text-decoration-none">Some title of article here</a>
                </h6>
                <h6 class="border-bottom lh-lg text-decoration-none text-secondary">
                    <a href="#" class="text-decoration-none">Some title of article here longer</a>
                </h6>
                <h6 class="border-bottom lh-lg text-decoration-none text-secondary">
                    <a href="#" class="text-decoration-none">Some title of article here and little more long article</a>
                </h6>
                <h6 class="border-bottom lh-lg text-decoration-none text-secondary">
                    <a href="#" class="text-decoration-none">Some title of article here this is the last one</a>
                </h6>

                <hr class="divider">

                <!--image ad space -->
                <?php include "template/image_ad_space.php"; ?>

                <hr class="divider">

                <p class="text-uppercase fw-bold"><i class="bi bi-trophy"></i> TOP Members</p>
                <p>1. Aayafi - 5400 <i class="bi bi-coin text-warning"></i></p>
                <p>2. Bhavin - 4400 <i class="bi bi-coin text-warning"></i></p>
                <p>3. Mhary - 3400 <i class="bi bi-coin text-warning"></i></p>
                <p>4. Praven - 2400 <i class="bi bi-coin text-warning"></i></p>
                <p>5. Praven - 2400 <i class="bi bi-coin text-warning"></i></p>
                <a href="#">View All..</a>

                <hr class="divider">

                <!--image ad space -->
                <?php include "template/image_ad_space.php"; ?>

            </div>

        </div>
        <!--Side bar end-->

    </div>

</div>

<?php include("includes/footer.php"); ?>


