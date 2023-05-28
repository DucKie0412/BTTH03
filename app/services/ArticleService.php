<?php
require_once('../app/config/config.php');
require_once APP_ROOT.'/app/models/Article.php';
    class ArticleService{
        // Chứa các hàm tương tác và xử lý dữ liệu
        private $servername = "localhost";
        private $username = "root";
        private $password = "chaukawaii!";
        private $dbname = "article-web";
        private $conn = "";

        public function getAllArticles(){
            // Bước 01: Kết nối DB Server
            $this->conn = null;
            //tao ket noi
            try {
                $this->conn = new PDO("mysql:host=".$this->servername.";dbname=" .$this->dbname."", $this->username, $this->password);
                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected DB successfully";
            } catch(PDOException $e) {
                echo "Connection DB failed: " . $e->getMessage();
            }

            // Bước 02: Truy vấn DL

            $sql = "SELECT * FROM article";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();


            //xu li ket qua
            $articles = [];
            while ($row = $stmt->fetch()) {
                $article = new Article($row['id'], $row['title'], $row['summary'], $row['content']);
                $articles[] = $article;
            }
            return $articles;

        }
    }

?>