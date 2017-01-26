<?php
    /*
     * first step hamikar
     *
     */
    // include_once ('Requests-1.7.0/library/Requests.php');
    // Requests::register_autoloader();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crawler";
    function get_newBook($url)
    {
        // $response = Requests::get($url, header( 'Content-Type: text/html; charset=utf-8' ));
        $doc = new DOMDocument();
        $doc->loadHTMLFile($url);
        $links = $doc->getElementsByTagName('h1');
        foreach($links as $link) {
            $result[] = $link->nodeValue;
        }
        // return array_reverse($result);
        return $result;
    }
    $a = get_newBook('http://laitec.ir/');
	$pdo = new PDO("mysql:host=localhost;dbname=crawler","root","");
    foreach ($a as $value) {
        $sql = "INSERT INTO hamikar (title, url) VALUES ('$value', 'amir')";   
        $stmt = $pdo->prepare("INSERT INTO hamikar (title, url) VALUES ('$value', 'amir')");
        $stmt->execute();
        echo utf8_decode($value)."\n";
        // echo "ok";
    }
?>