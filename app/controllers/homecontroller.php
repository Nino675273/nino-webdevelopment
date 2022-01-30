<?php
require __DIR__ . '/controller.php';

class HomeController extends Controller {
    public function index() {
        require __DIR__ . '/../views/home/index.php';
    }

    public function about() {
        require __DIR__ . '/../views/about/index.php';
    }

    public function contact() {
        require __DIR__ . '/../views/contact/index.php';
    }

    public function home() {
        require __DIR__ . '/../views/home/index.php';
    }
}
?>