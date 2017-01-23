<?php
    function connect(){
        global $pdo;
        $pdo = new PDO("mysql:host=localhost;dbname=crawler","root","");
    }

    function insert_data($title, $url){
//        global $pdo;
        $pdo = new PDO("mysql:host=localhost;dbname=crawler","root","");
        $stmt = $pdo->prepare("INSERT INTO hamikar (title, url) VALUES (:title, :url)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':url', $url);
        $stmt->execute();
    }
?>