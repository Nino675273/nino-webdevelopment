<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/article.php';

class ArticleRepository extends Repository
{
    function getAllArticles()
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM product");
            
            $stmt->execute();
            
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $products = $stmt->fetchAll();

            return $products;

        } catch (PDOException $e)
        {
            echo $e;
        }
    }

    function insert($article) {
        try {
            $stmt = $this->connection->prepare("INSERT into article (title, content, author, posted_at) VALUES (?,?,?, NOW())");            
            
            $stmt->execute([$article->getTitle(), $article->getContent(), $article->getAuthor()]);

        } catch (PDOException $e) {
            echo $e;
        }
    }
}
