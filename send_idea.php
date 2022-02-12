<?php
require_once('core/init.php');
if (isset($_SESSION['username'])){
    $title = "Send Idea And Earn - SOAMonitor.com";
    include ('includes/header.php');
    ?>
    <div class="main">

        <div class="container my-4">

            <div class="row justify-content-center">

                <h2 class="text-center mb-3 fw-bold">Send Good Idea & Earn <i class="bi bi-coin"></i></h2>

                <div class="accordion accordion-flush m-3" id="accordionIdeaFaq">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFirst">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFirst"
                                    aria-expanded="false" aria-controls="flush-collapseFirst">
                                How Much Coins Will I Get For An Approved Idea?
                            </button>
                        </h2>
                        <div id="flush-collapseFirst" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingFirst" data-bs-parent="#accordionIdeaFaq">
                            <div class="accordion-body bg-light text-center">
                                <p>It depends on how good and compatible it is with our site.</p>
                                <p>If the idea is for a small improvement on the site the prize will be small,
                                    if the idea is big and good respectively and the prize will be bigger.
                                </p>
                                <p>Prizes range from 100 to 100,000 coins ($0.10 - $100)!</p>
                                <small class="fst-italic text-danger">(Please note that you will only receive coins for an idea that has been approved by us!)</small>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSecond">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseSecond"
                                    aria-expanded="false" aria-controls="flush-collapseSecond">
                                What Are The Requirements For Approving My Idea?
                            </button>
                        </h2>
                        <div id="flush-collapseSecond" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingTwo" data-bs-parent="#accordionIdeaFaq">
                            <div class="accordion-body bg-white text-center">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        1. It should be clearly written and easy to understand.
                                    </li>
                                    <li class="list-group-item">
                                        2. Must be compatible with our site.
                                    </li>
                                    <li class="list-group-item">
                                        3. Must be described in detail.
                                    </li>
                                    <li class="list-group-item">
                                        4. It has to be unique. An idea sent by several users will not be accepted, we will only accept the one sent first!
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThird">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThird"
                                    aria-expanded="false" aria-controls="flush-collapseThird">
                                When Will You Review My Idea? And When Will I Receive My Award If It Is Approved?
                            </button>
                        </h2>
                        <div id="flush-collapseThird" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingThird" data-bs-parent="#accordionIdeaFaq">
                            <div class="accordion-body bg-light text-center">
                                <p>We usually review the ideas within 7 days. But sometimes it can take longer,
                                    depending on how many ideas have been submitted and are awaiting review.
                                </p>
                                <p>If your idea is approved, you will receive your award immediately after approval.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFourth">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFourth"
                                    aria-expanded="false" aria-controls="flush-collapseFourth">
                                What idea should I send?
                            </button>
                        </h2>
                        <div id="flush-collapseFourth" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingThird" data-bs-parent="#accordionIdeaFaq">
                            <div class="accordion-body bg-light text-center">
                                <p>Think about what else you would like our site to have?</p>
                                <p>Something that would help you have a more enjoyable experience on the site.</p>
                                <p>There is no limit to what the ideas are, as long as they are related to the site and the main topic.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Idea FAQ & info END-->

                <div class="col-sm-10 col-lg-7 shadow-lg bg-light rounded-3 py-3">

                    <div id="sendIdeaCard" class="card-body py-3">

                        <form action="includes/login.inc.php" method="post"
                              class="row g-2 needs-validation was-validated">

                            <!-- Idea Name -->
                            <div class="col-12">

                                <label class="form-label" for="ideaName">Idea Title</label>
                                <input class="form-control" type="text" name="idea_name" placeholder="Idea Title..."
                                       pattern="^([a-zA-Z0-9$.?!,: ]{15,45})$"
                                       id="ideaName" required="required"/>

                                <div class="invalid-feedback"> Enter Idea Name!</div>

                            </div><!-- Idea Name END-->
                            <div class="col-12 form-floating">

                                <textarea class="form-control" id="ideaDescription" style="height: 140px" required></textarea>
                                <label for="ideaDescription"><i class="bi bi-lightbulb"></i> Idea Description..</label>

                            </div><!-- Idea Description END-->

                            <!-- Add Button-->
                            <div class="row g-2 my-4">
                                <button id="addAdBtn" type="submit" name="add" class="btn btn-success ">Send</button>
                                <button type="button" class="btn btn-primary" onclick="window.location='account.php'">
                                    <i class="bi bi-arrow-return-left"></i> Back To My Ideas List</button>
                            </div><!-- Login Button END -->


                        </form>

                    </div>

                </div>

            </div>

            <!--The Featured Ad Space-->
            <?php include "template/featured_ad_space.php"; ?>
        </div>

    </div>

    <?php include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>