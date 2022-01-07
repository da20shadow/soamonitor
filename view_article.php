<?php
require_once('core/init.php');

$username = "You are logged in as " . $_SESSION['username'] ?? "Please login to comment.";

$title = "Article - SOAMonitor.com";
include ('includes/header.php');
?>
<div class="container mt-3 bg-white">

    <div class="row g-4">

        <div class="col-12 col-md-9">

            <div class="p-3 border">

                <h1 class="text-center fw-bold">Article Title</h1>

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

                <div class="ms-3">
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

                </div>

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

            <div class="mt-2">


                <h5 class="ms-3">8 Comments</h5>

                <hr class="divider">

                <div class="row mt-2 m-auto">

                    <div class="col-12 col-md-2 text-center">
                        <div class="d-flex flex-wrap justify-content-center">
                            <a class="position-relative p-0 d-inline-block" href="#">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="48" alt="Avatar"/>
                            </a>
                            <small class="px-1 m-2" style="font-size:13px;">@username</small>
                            <small class="border border-dark px-1" style="font-size:13px;">FREE Member</small>
                        </div>
                    </div>

                    <div class="col-12 col-md-10">
                        <div class="align-bottom mb-2">
                            <strong class="text-primary">John Doe</strong>
                            <small class="border rounded-3 border-danger text-danger px-2 me-2" style="font-size:13px;">
                                <i class="bi bi-circle-fill text-danger"></i>
                                Offline
                            </small>
<!--                            <small class="border border-success rounded-3 text-success px-2 me-2">-->
<!--                                <i class="bi bi-circle-fill text-success"></i>-->
<!--                                Online-->
<!--                            </small>-->
                            <small class="text-muted"><i class="bi bi-clock"></i> 3 days ago</small>
                        </div>
                        <p class="text-secondary">
                            This is the comment content here...This is the comment content here...
                            This is the comment content here...This is the comment content here...
                        </p>
                        <div class="d-flex justify-content-end me-5">
                            <a href="#"><i class="bi bi-reply"></i> Reply</a>
                        </div>
                    </div>
                </div><!--Comment-->
                <div class="row mt-2 m-auto">

                    <div class="col-12 col-md-2 text-center">
                        <div class="d-flex flex-wrap justify-content-center">
                            <a class="position-relative p-0 d-inline-block" href="#">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="48" alt="Avatar"/>
                            </a>
                            <small class="px-1 m-2" style="font-size:13px;">@username</small>
                            <small class="border border-dark px-1" style="font-size:13px;">VIP Member</small>
                        </div>
                    </div>

                    <div class="col-12 col-md-10">
                        <div class="align-bottom mb-2">
                            <strong class="text-primary">John Doe</strong>
                            <small class="border rounded-3 border-success text-success px-2 me-2" style="font-size:13px;">
                                <i class="bi bi-circle-fill text-success"></i>
                                Online
                            </small>
                            <small class="text-muted"><i class="bi bi-clock"></i> 4 days ago</small>
                        </div>
                        <p class="text-secondary">
                            This is the comment content here...This is the comment content here...
                            This is the comment content here...This is the comment content here...
                        </p>
                        <div class="d-flex justify-content-end me-5">
                            <a href="#"><i class="bi bi-reply"></i> Reply</a>
                        </div>
                    </div>
                </div><!--Comment-->
                <div class="row mt-2 m-auto">

                    <div class="col-12 col-md-2 text-center">
                        <div class="d-flex flex-wrap justify-content-center">
                            <a class="position-relative p-0 d-inline-block" href="#">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="48" alt="Avatar"/>
                            </a>
                            <small class="px-1 m-2" style="font-size:13px;">@username</small>
                            <small class="border border-dark px-1" style="font-size:13px;">FREE Member</small>
                        </div>
                    </div>

                    <div class="col-12 col-md-10">
                        <div class="align-bottom mb-2">
                            <strong class="text-primary">John Doe</strong>
                            <small class="border rounded-3 border-danger text-danger px-2 me-2" style="font-size:13px;">
                                <i class="bi bi-circle-fill text-danger"></i>
                                Offline
                            </small>
<!--                            <small class="border border-success rounded-3 text-success px-2 me-2">-->
<!--                                <i class="bi bi-circle-fill text-success"></i>-->
<!--                                Online-->
<!--                            </small>-->
                            <small class="text-muted"><i class="bi bi-clock"></i> 5 days ago</small>
                        </div>
                        <p class="text-secondary">
                            This is the comment content here...This is the comment content here...
                            This is the comment content here...This is the comment content here...
                        </p>
                        <div class="d-flex justify-content-end me-5">
                            <a href="#"><i class="bi bi-reply"></i> Reply</a>
                        </div>
                    </div>
                </div><!--Comment-->

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
                </nav><!--Pagination -->

            </div>

        </div>

        <div class="col-12 col-md-3">

            <div class="p-3 border">

                <h4>Right sidebar</h4>

                <p class="text-uppercase fw-bold">Discover more of what matters to you</p>
                <button class="btn rounded bg-white border mt-1">Category</button>
                <button class="btn rounded bg-white border mt-1">Category 2</button>
                <button class="btn rounded bg-white border mt-1">Category 3</button>
                <button class="btn rounded bg-white border mt-1">Category 4</button>
                <button class="btn rounded bg-white border mt-1">Category 5</button>
                <hr class="divider">
                <p class="text-uppercase fw-bold"><i class="bi bi-trophy"></i> TOP Members</p>
                <p>1. Aayafi - 5400</p>
                <p>2. Bhavin - 4400</p>
                <p>3. Mhary - 3400</p>
                <p>4. Praven - 2400</p>
                <p>5. Praven - 2400</p>
                <a href="#">View All..</a>

                <div class="card mt-3">
                    <img src="assets/img/post.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">$15/Week</small>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<?php include("includes/footer.php"); ?>


