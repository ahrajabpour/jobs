<?php
//    require ('connect_db.php');
    require ('1.php');
//    connect();
   $pdo = new PDO("mysql:host=localhost;dbname=crawler","root","");
    // $con = new mysqli('localhost','root','','crawler');
    foreach (get_newBook('http://www.hamikar.com/') as $value) {
       // $title = $value['text'];
          $title = $value;
       // $url = $value['url'];
       $stmt = $pdo->prepare("INSERT INTO hamikar (title, url) VALUES ('$title', 'amir')");
       // $stmt->bindValue(':title', $title);
       // $stmt->bindValue(':url', $url);
       $stmt->execute();
      echo $value;
    }
    echo "OK";
?>
