<?php
//    require ('connect_db.php');
    require ('1.php');
//    connect();
   $pdo = new PDO("mysql:host=localhost;dbname=crawler","root","");
    // $con = new mysqli('localhost','root','','crawler');
    foreach (get_newBook('http://www.hamikar.com/') as $value) {
       $title = $value['text'];
       $url = $value['url'];
       $stmt = $pdo->prepare("INSERT INTO hamikar (title, url) VALUES ('$title', '$url')");
       // $stmt->bindValue(':title', $title);
       // $stmt->bindValue(':url', $url);
       $stmt->execute();
    }
    echo "OK";
?>
