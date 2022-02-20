<?php
require_once('core/init.php');
if (isset($_SESSION['username'])){
$title = "Add New Ad - SOAMonitor.com";
$pageId = "add_new_ad";
include ('includes/header.php');
?>
    <div class="main">

        <div class="container my-4">

            <div class="row justify-content-center">

                <h2 class="text-center mb-3 fw-bold">Add New Ad <i class="bi bi-badge-ad"></i></h2>

                <div class="col-sm-10 col-lg-7 shadow-lg bg-light rounded-3 py-3">

                    <div id="addNewAdCard" class="card-body py-3">

                        <form action="includes/login.inc.php" method="post"
                              class="row g-2 needs-validation was-validated">

                            <!-- Ad Title -->
                            <div class="col-12">

                                <label class="form-label" for="adTitle">Ad Title</label>
                                <input class="form-control" type="text" name="ad_title" placeholder="Ad Title"
                                       pattern="^([a-zA-Z0-9$.?!,: ]{15,41})$"
                                       id="adTitle" required="required"/>

                                <div id="InvestmentErrorMessage" class="invalid-feedback">
                                    Enter Ad Title!
                                </div>

                            </div><!-- Ad Title END-->
                            <div class="col-12 form-floating">

                                <textarea class="form-control" id="adDescription" style="height: 100px" required></textarea>
                                <label class="ms-2" for="adDescription">Ad Description</label>

                            </div><!-- Ad Description END-->
                            <div class="col-12 ">

                                <label class="form-label" for="scam_url"><i class="bi bi-link"></i> Website URL</label>
                                <input class="form-control" type="text" name="scam_url" placeholder="https://site.com"
                                       pattern="https:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{2,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)"
                                       id="scam_url" required="required"/>

                                <div class="invalid-feedback">Enter Website URL!</div>

                            </div><!-- Ad URL END-->
                            <div class="col-md-6 ">
                                <select class="form-select" required aria-label="select example">
                                    <option value="">Ad Category</option>
                                    <option value="1">PTC site</option>
                                    <option value="2">Risky Investment</option>
                                    <option value="3">RevShare</option>
                                    <option value="4">Other</option>
                                </select>
                                <div class="invalid-feedback">Please, select ad Category!</div>
                            </div><!--Select Ad Category-->
                            <div class="col-md-6 ">
                                <select onchange="addCallToAction()" id="adTypeSelect" class="form-select" required aria-label="select example">
                                    <option value="">Select Ad Type</option>
                                    <option value="Featured_Ad">1 Week Featured Text Ad - $13 USD</option>
                                    <option value="Image_Ad">1 Week Featured Text Ad with Image - $15 USD</option>
                                </select>
                                <div class="invalid-feedback">Please, select ad type!</div>
                            </div><!--Select Ad Type-->
                            <div id="adImgUrl" class=" col-12 "></div><!-- Image URL-->

                            <!-- Add Button-->
                            <div class="row g-2 my-4">
                                <button id="addAdBtn" type="submit" name="add" class="btn btn-primary bg-gradient">Add</button>
                                <button type="button" class="btn btn-secondary bg-gradient" onclick="window.location='my_ads.php'">
                                    <i class="bi bi-arrow-return-left"></i> Back To My Ads</button>
                            </div><!-- Login Button END -->


                        </form>

                    </div>

                </div>

            </div>

            <!--The Featured Ad Space-->
            <?php include "template/featured_ad_space.php"; ?>
        </div>

    </div>
<!--    <script>-->
<!--        let selectedAdType = document.getElementById('adTypeSelect');-->
<!--        selectedAdType.addEventListener('change',function(){-->
<!---->
<!--            let adImgURL = '<label class="form-label" for="adImgInput">Image URL</label>' +-->
<!--                '<input class="form-control" type="text" name="adImg" '+-->
<!--                'placeholder="https://site.com/image.gif" '+-->
<!--                'pattern="https:\\/\\/(www\\.)?[-a-zA-Z0-9@:%._\\+~#=]{1,256}\\.[a-zA-Z0-9()]{2,6}\\b([-a-zA-Z0-9()@:%_\\+.~#?&//=]*)" '+-->
<!--                'id="adImgInput" required/>' +-->
<!--                '<div id="InvestmentErrorMessage" class="invalid-feedback">'+-->
<!--                'Add Image URL! Recommended: (415x225 px)</div>';-->
<!---->
<!--            let callToAction = '<label class="form-label" for="callToActionInput">Call to Action</label>' +-->
<!--                '<input class="form-control" type="text" name="calToAction" '+-->
<!--                'placeholder="Call to Action Text" pattern="^([a-zA-Z0-9$.?!,: ]{5,45})$" id="callToActionInput" required/>' +-->
<!--                '<div class="invalid-feedback">Add Call To Action Text!</div>';-->
<!---->
<!--            if (selectedAdType.value === 'Image_Ad'){-->
<!--                document.getElementById('adImgUrl').innerHTML= adImgURL;-->
<!--            }else if (selectedAdType.value === 'Featured_Ad'){-->
<!--                document.getElementById('adImgUrl').innerHTML= callToAction;-->
<!--            }else{-->
<!--                document.getElementById('adImgUrl').innerHTML= "";-->
<!--            }-->
<!--        });-->
<!--    </script>-->

<?php include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>