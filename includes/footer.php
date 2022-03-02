<!-- Add New Investment Modal -->
<div class="modal fade" id="addProjectModal" tabindex="-1"
     aria-labelledby="addNewProjectModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Add New Investment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body py-3">
                    <div id="addedProject"></div>
                    <div class="needs-validation was-validated" id="addInvForm">

                        <div>

                            <label class="form-label" for="projectName">Project Name</label>
                            <input class="form-control" type="text" name="project_name" placeholder="Project Name"
                                   pattern="^([a-zA-Z0-9_. ]{5,45})$"
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
                            <button id="addProject" type="submit" name="add" class="btn btn-primary bg-gradient">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary bg-gradient" id="addProjectAgain" style="display:none;">Add New</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Report SCAM Modal -->
<div class="modal fade" id="reportProjectModal" tabindex="-1"
     aria-labelledby="reportProjectModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Report SCAM!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body py-0">
                    <div class="needs-validation was-validated" id="reportInvForm">
                        <!-- Scam site Name -->
                        <div class="mb-2">

                            <label class="form-label" for="scam_name">SCAM Name</label>
                            <input class="form-control" type="text" name="scam_name" placeholder="SCAM Name"
                                   pattern="^([a-zA-Z0-9$.?!,: ]{5,45})$"
                                   id="scam_name" required="required"/>

                            <div class="invalid-feedback">Enter Scam Name!</div>

                        </div><!-- Scam site Name END-->
                        <div class="mb-2">

                            <label class="form-label" for="scam_url"><i class="bi bi-link"></i> Website URL</label>
                            <input class="form-control" type="text" name="scam_url" placeholder="https://site.com"
                                   pattern="https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{2,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)"
                                   id="scam_url" required="required"/>

                            <div class="invalid-feedback">Enter Website URL!</div>

                        </div><!-- Scam site URL END-->
                        <div class="mb-2">

                            <label class="form-label" for="reporterEmail">
                                <i class="bi bi-envelope"></i> Email</label>
                            <input class="form-control" type="text" name="email" placeholder="email@email.com"
                                   pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z])+[.]([a-zA-Z]{2,4})+$"
                                   id="reporterEmail" required/>
                            <div class="invalid-feedback">Enter Email</div>
                            <div class="valid-feedback">OK!</div>

                        </div><!-- Your Email END-->
                        <div class="form-floating mb-2">

                            <textarea class="form-control" id="scDescription" style="height: 100px" required></textarea>
                            <label for="scDescription">Reason For The Report</label>

                        </div><!-- Sc Description END-->
                        <div class="mb-2">
                            <select class="form-select" required aria-label="select example">
                                <option value="">Category</option>
                                <option value="1">Risky Investment</option>
                                <option value="2">PTC site</option>
                                <option value="3">PTA Site</option>
                                <option value="4">Other</option>
                            </select>
                            <div class="invalid-feedback">Please, select Category!</div>
                        </div><!--Category-->
                        <!-- Report Button-->
                        <div class="row g-2 my-4">
                            <button type="submit" name="add" class="btn btn-danger bg-gradient">Report</button>
                        </div><!-- Login Button END -->

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer id="footer" class="text-center text-lg-start text-white mt-5" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container pt-4 pb-0">
        <!-- Section: CTA -->
        <section class="mb-5">
            <div class="d-flex justify-content-center align-items-center flex-wrap">
                <span class="me-3">Subscribe For Our Newsletter</span>
                <input type="text" class="form-control w-25 me-2 shadow-none" placeholder="Email">
                <button type="button" class="btn btn-outline-light btn-rounded">
                    Subscribe!
                </button>
            </div>
            <small class="d-flex justify-content-center align-items-center">By clicking the button "Subscribe" you agree with terms and privacy policy!</small>
        </section>
        <!-- Section: CTA -->

        <div class="row mt-3">

            <!-- Logo and text -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <a href="index.php">
                    <img src="assets/img/logo.png" alt="SOA monitor Logo" style="width:160px; height:30px; filter: brightness(50%);">
                </a>
                <p class="fs-6 my-3 text-white">“Join us Now And Learn How We Make A Full-Time Job Working From Home Like A Boss. “</p>
                <div class="footer-soc-icons d-flex">
                    <a href="" class="bi bi-facebook me-2 " title="Facebook Page"></a>
                    <a href="" class="bi bi-telegram me-2 " title="Telegram Channel"></a>
                    <a href="" class="bi bi-instagram me-2 " title="Instagram"></a>
                    <a href="" class="bi bi-pinterest me-2 " title="Pinterest"></a>
                    <a href="" class="bi bi-youtube me-2 " title="YouTube Channel"></a>
                </div>
            </div>
            <!-- First nav -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 f-nav">
                <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
                <p>
                    <a href="#"><i class="bi bi-people-fill"></i> Telegram group</a>
                </p>
                <p>
                    <a href="advertise.php"><i class="bi bi-megaphone-fill"></i> Advertise</a>
                </p>
                <p>
                    <a href="#"><i class="bi bi-question-circle-fill"></i> FAQ</a>
                </p>
            </div>
            <!-- Second nav -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 f-nav">
                <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
                <p>
                    <a href="#"><i class="f-icon bi bi-caret-right-fill"></i> Terms</a>
                </p>
                <p>
                    <a href="#"><i class="f-icon bi bi-caret-right-fill"></i> Privacy</a>
                </p>
                <p>
                    <a href="#"><i class="f-icon bi bi-caret-right-fill"></i> Help</a>
                </p>
            </div>
            <!-- Contacts -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 f-nav">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Contact
                </h6>
                <p class="text-white">
                    <i class="bi bi-envelope me-2"></i>
                    support@soamonitor.com
                </p>
                <p><a href="#"><i class="bi bi-telegram me-2"></i>Telegram Support</a></p>
                <p>
                    <a href="contact_us.php"><i class="bi bi-life-preserver"></i> Support</a>
                </p>
            </div>

        </div>
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        Copyrights ©2021 SOAMonitor. All rights reserved.
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

<!--Accept cookie -->
<div class="fixed-bottom m-auto w-75 alert alert-info alert-dismissible fade show" role="alert">
    To make soamonitor work, we log user data.
    By using soamonitor, you agree to our <a href="privacy.php" class="alert-link">Privacy Policy</a>,
    including cookie policy.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<!--Back To TOP -->
<div id="backToTopBtn" class="back-top">
    <i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle fs-4"></i>
</div>

<script>
    //Back To Top
    window.onscroll = function() {BackToTopFunction()};
    function BackToTopFunction() {
        console.log("Back To Top Function called!");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("backToTopBtn").className = "back-top-show";
            let backToTop = document.getElementById('backToTopBtn');
            backToTop.addEventListener('click',() => window.scrollTo({
                top: 0,
                behavior: 'smooth'
            }));
        } else {
            document.getElementById("backToTopBtn").className = "back-top";
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/functions.js"></script>
<script type="text/javascript" src="core/ajax/user.js"></script>
<script type="text/javascript" src="core/ajax/posts.js"></script>
<script type="text/javascript" src="core/ajax/investments.js"></script>

</body>

</html>