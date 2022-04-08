<?php
require __DIR__ . '/../../services/articleservice.php';

class ArticleController
{

    private $articleService;

    function __construct()
    {
        $this->articleService = new ArticleService();
    }

    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $laptops = $this->articleService->getAllArticles();
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($laptops);
        }
    }
}
