<?php
require_once('core/init.php');

if (isset($_SESSION['username'])){

if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['category'])) {

    $articleTitle = $getFromFunc->checkInput($_POST['title']);
    $content = $getFromFunc->checkInput($_POST['content']);
    $category = $getFromFunc->checkInput($_POST['category']);
    $status = 1;
    $author = $getFromFunc->checkInput($_SESSION['user_id']);
    $keywords = $getFromFunc->checkInput($_POST['keywords']);
    $description = $getFromFunc->checkInput($_POST['meta-description']);

    // replace non letter or digits by divider
    $slug = preg_replace('~[^\pL\d]+~u', "-", $articleTitle);
    // transliterate
    $slug = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
    // remove unwanted characters
    $slug = preg_replace('~[^-\w]+~', '', $slug);
    // trim
    $slug = trim($slug, "-");
    // remove duplicate divider
    $slug = preg_replace('~-+~', "-", $slug);
    // lowercase
    $slug = strtolower($slug);

    $checkIfExist = $getFromPost->checkIfArticleExist($articleTitle);

//    echo html_entity_decode($content);

    if (!$checkIfExist) {

        echo $keywords;
        echo strlen($description);
        echo $description;

        if (strlen($articleTitle) > 77){
            echo htmlspecialchars("The title is too long! Allowed 75 chars max!");
        }else if (strlen($articleTitle) < 20){
            echo htmlspecialchars("The article is too short! Min is 20 characters!");
        }else if ($category == ""){
            echo htmlspecialchars("Please Select category!");
        }else if (empty($category)){
            echo htmlspecialchars("Please Select category!");
        }else if (empty($keywords)){
            echo htmlspecialchars("Please add keywords!");
        }else if ($keywords = ""){
            echo htmlspecialchars("Please add keywords!");
        }else if (empty($description)){
            echo htmlspecialchars("Please add short Article description!");
        }else if ($description = ""){
            echo htmlspecialchars("Please add short Article description!");
        }else if (strlen($description) > 142){
            echo htmlspecialchars("Article description Must be MAX 140 characters!");
        }else if (strlen($content) < 550){
            echo htmlspecialchars("Article content must be at least 500 characters!");
        }else{
            $insert = $getFromPost->createNewArticle($articleTitle, $content, $category, $slug,
                $status, $author,$keywords,$description);

            if ($insert) {
                echo htmlspecialchars("Successfully published Article!");
            } else {
                echo htmlspecialchars("Error!");
            }
        }

    } else {
        echo htmlspecialchars("There is article with such title already!");
    }
}

$title = "Add New Post SOAMonitor.com";
include('includes/header.php');
?>
    <script src="https://cdn.tiny.cloud/1/6zbl802ewbuacllik1kmn1mxuaxo4248eqhq9ylzroa5a8t1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <div class="shadow-lg m-5 p-5 rounded">

        <h4 id="successError"></h4>

        <div class="row">

            <div id="test"></div>

            <!-- Title and article content -->
            <div class="col-9">

                <form id="new_post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                <label class="form-label" for="title">Title:</label>
                <input class="form-control form-control-lg"
                       id="title" name="title" type="text" placeholder="Title.." required>

                <label class="form-label" for="content">Article Content:</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="30"></textarea>

                <br>

                    <label for="meta_description">Short Article Description:</label>
                    <input id="meta_description" class="form-control is-invalid"
                           type="text" name="meta-description"
                           placeholder="Short Article Description Min 100 and Max 140 characters!" required>

                    <p id="display">Between 100 - 140 characters!</p>
                    <script>
                        let metaCounter = document.getElementById('meta_description');
                        metaCounter.addEventListener("keyup",counter);
                        let display = document.getElementById('display');
                        function counter(){
                            let length = metaCounter.value.length;
                            if (length > 20 && length < 106){
                                if (metaCounter.classList.contains('is-valid')){
                                    metaCounter.classList.add('is-invalid');
                                }
                                display.style.color = "red";
                                document.getElementById('display').innerHTML = "Too Short Add Few Words More";
                            }else if (length >= 142){

                                if (metaCounter.classList.contains('is-valid')){
                                    metaCounter.classList.add('is-invalid');
                                }

                                display.style.color = "red";
                                document.getElementById('display').innerHTML = "Too Long..";

                            }else if (length > 106 && length < 142){
                                metaCounter.classList.remove('is-invalid');
                                metaCounter.classList.add('is-valid');
                                display.style.color = "green";
                                document.getElementById('display').innerHTML = "Awesome!";
                            }
                        }
                    </script>

                <br>
                <label class="form-label" for="keywords">Add Keywords</label>
                <input class="form-control" id="keywords" name="keywords" type="text" placeholder="Keywords, separated, with, comma">

                </form>

            </div>

            <!--Side bar -->
            <div class="col-3">
                <button onclick="window.location.href='../account.php'"
                        class="btn btn-primary bg-gradiant mb-4">My Articles</button>
                <br>
                <p id="author" data-author-id="<?php echo htmlspecialchars($user_id);?>">Author: <?php echo htmlspecialchars($username); ?></p>
                <br>
                <label class="form-label" for="category">Category:</label>
                <select class="form-select" name="category" id="category" form="new_post" required>
                    <option value="">Select Category</option>
                    <option value="1">News</option>
                    <option value="2">Test</option>
                </select>
                <br>

                <label class="form-label" for="featured_image">Featured Image:</label>
                <input form="new_post" class="form-control" id="featured_image" name="featured_image" type="text" placeholder="Featured Image">
                <br>

                <button type="submit" id="publish" form="new_post" class="btn btn-primary bg-gradiant">Publish</button>

            </div>

        </div>

    </div>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
    <script src="/assets/js/article.js"></script>


<?php
include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>
