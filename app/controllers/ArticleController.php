<?php
include("services/ArticleService.php");
class ArticleController{

    public function create(){
        include("views/article/create.php");
    }

    public function edit(){
        include("views/article/edit.php");
    }

    public function show(){
        include("views/article/show.php");
    }

    public function index(){
        // Tương tác với Services/Models
        $articleService = new ArticleService();
        $articles = $articleService->getAllArticles();
        // Tương tác với View
        include("views/article/index.php");
    }

}
?>