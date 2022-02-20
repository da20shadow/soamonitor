<?php
Class Post{
    protected PDO $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    //Check if article already exist
    public function checkIfArticleExist($title): bool
    {
        $sql = "SELECT title FROM posts WHERE title=:title";
        $stm = $this->pdo->prepare($sql);

        $stm->bindparam(':title',$title);
        $stm->execute();
        $result = $stm->fetch();
        if ($result){
            return true;
        }
        return false;
    }
    //Insert new Article
    public function createNewArticle($title,$body,$category,$slug,$status,$author,$keywords,$meta_description): bool
    {
        try {
            $sql = "INSERT INTO `posts` (title,content,category,slug,status,author_id,keywords,meta_description)
                    VALUES (:title,:body,:category,:slug,:status,:author_id,:keywords,:meta_description);";
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindparam(':title', $title);
            $stmt->bindparam(':body', $body);
            $stmt->bindparam(':category', $category);
            $stmt->bindparam(':slug', $slug);
            $stmt->bindparam(':status', $status);
            $stmt->bindparam(':author_id', $author);
            $stmt->bindparam(':keywords', $keywords);
            $stmt->bindparam(':meta_description', $meta_description);

            $stmt->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    //Display similar article titles
    public function showSimilarTitles($title){

        $sql = "SELECT title,slug FROM posts WHERE title LIKE :title";
        $stm = $this->pdo->prepare($sql);
        $stm->bindparam(':title',$title);
        $stm->execute();
        return $stm->fetch();

    }
    //Select all articles From Category X
    public function getAllPostFromCategory($category): bool|array
    {
        $sql = "SELECT * FROM posts WHERE category = :category ORDER BY published_on DESC LIMIT 10 OFFSET 0";

        $stm = $this->pdo->prepare($sql);
        $stm->bindparam(":category",$category);
        $stm->execute();
        return $stm->fetchAll();
    }
}