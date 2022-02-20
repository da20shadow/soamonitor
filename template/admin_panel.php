<?php
$title = "Admin Dashboard";
$pageId = "admin_dashboard";

global $membership;

if (isset($membership) && $membership == "Admin"){
    $username = $_SESSION['username'];
    global $user_id;
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <title><?php echo htmlspecialchars($title) ?></title>
        <script src="https://cdn.tiny.cloud/1/6zbl802ewbuacllik1kmn1mxuaxo4248eqhq9ylzroa5a8t1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
    <body>

    <div class="container">

        <h4 id="successError"></h4>

        <div class="row">

            <div id="test"></div>

            <!-- Title and article content -->
            <div class="col-9">

                <label class="form-label" for="title">Title:</label>
                <input class="form-control form-control-lg"
                       id="title" name="title" type="text" placeholder="Title.." required>
                <p id="slug"></p>

                <label class="form-label" for="content">Article Content:</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>

                <br>

                <label class="form-label" for="featured_image">Featured Image:</label>
                <input class="form-control" id="featured_image" name="featured_image" type="text" placeholder="Featured Image">

                <label class="form-label" for="keywords">Add Keywords</label>
                <input class="form-control" id="keywords" name="keywords" type="text" placeholder="Keywords, separated, with, comma">

                <label for="meta_description">Short Article Description:</label>
                <input id="meta_description" class="form-control is-invalid"
                       type="text" name="meta-description"
                       placeholder="Short Article Description Min 100 and Max 140 characters!" required>

                <p id="display">Between 100 - 140 characters!</p>

            </div>

            <!--Side bar -->
            <div class="col-3">
                <button onclick="window.location.href='../account.php'"
                        class="btn btn-primary bg-gradiant btn-lg mb-4">Back to Account</button>
                <br>
                <p id="author" data-author-id="<?php echo htmlspecialchars($user_id);?>"><?php echo htmlspecialchars($username); ?></p>
                <br>
                <label class="form-label" for="category">Category:</label>
                <select class="form-select" name="category" id="category" required>
                    <option value="">Select Category</option>
                    <option value="1">News</option>
                    <option value="2">Test</option>
                </select>
                <br>

                <button id="publish" class="btn btn-primary bg-gradiant">Publish</button>

            </div>

        </div>

    </div>

    <div id="myTest">

    </div>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
    <script>
        let publishButton = document.getElementById("publish");
        publishButton.addEventListener("click",()=>{
           let title = document.getElementById("title").value;
           let body = document.querySelectorAll("#tinymce");
           let keywords = document.getElementById("keywords").value;
           let category = document.getElementById("category").value;
           let meta = document.getElementById("meta_description").value;

           console.log("This is the type of the body: " + typeof(body));
           console.log("here is the body " + body);
           console.log("here is the body " + body.values());

           for (let value of body.values()){
               console.log(value)
           }

           document.getElementById("myTest").innerHTML = " button clicked!";
           document.getElementById("myTest").blur();

           let data = {
               title,
               body,
               keywords,
               category,
               meta
           }
           data = JSON.stringify(data);

        });

    </script>
    </body>
    </html>
    <?php
}else {
    $message = "<h2 class='text-center text-danger'>You must log in first!</h2>
                <br>
                <button onclick='window.location.href=\"../login.php\"' class='btn btn-primary bg-gradient'>Login</button>";
    echo $message;

}
?>