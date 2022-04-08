<?php
require __DIR__ . '/../repositories/articlerepository.php';


class ArticleService {
    public function getAll() {
        $repository = new ArticleRepository();
        return $repository->getAll();
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