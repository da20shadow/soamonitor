<?php
require_once "../core/init.php";

$receivedData = file_get_contents("php://input");
$article = json_decode($receivedData,true);
$title = $article['title'];
$content = $article['body'];

if ($article){

    $title = $getFromFunc->checkInput($article['title']);
    $content = $getFromFunc->checkInput($article['content']);
    $category = $getFromFunc->checkInput($article['category']);
    $slug = $getFromFunc->checkInput($article['slug']);
    $status = $getFromFunc->checkInput($article['status']);
    $author = $getFromFunc->checkInput($article['author']);

    var_dump($content);

    $checkIfExist = $getFromPost->checkIfArticleExist($title);

    var_dump($content);

//    if (!$checkIfExist){
//
//        $insert = $getFromPost->createNewArticle($title,$content,$category,$slug,$status,$author);
//
//        if ($insert){
//            echo htmlspecialchars("Successfully published Article!");
//        }else{
//            echo htmlspecialchars("Error!");
//        }
//    }else {
//        echo htmlspecialchars("There is article with this title already!");
//    }

}


