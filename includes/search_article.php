<?php
require_once "../core/init.php";

$receivedData = file_get_contents("php://input");

$article = json_decode($receivedData,true);

if (isset($article)){

    $showArticle = $getFromPost->showSimilarTitles("%".$article."%");

//    var_dump($showArticle);
    if (mysqli_num_rows($showArticle) > 0){
        while ($row = mysqli_fetch_array($showArticle)){
            echo $row['title'];
        }
    }

}