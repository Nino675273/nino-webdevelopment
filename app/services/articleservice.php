<?php
require __DIR__ . '/../repositories/articlerepository.php';


class ArticleService {
    public function getAllArticles() {
        $repository = new ArticleRepository();
        return $repository->getAllArticles();
    }

    
    /*
    public function insert($article) {
        // retrieve data
        $repository = new ArticleRepository();
        $repository->insert($article);        
    }
    */
}

?>