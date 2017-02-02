<?php
    require ('simple_html_dom/simple_html_dom.php');
//    $con = mysqli_connect('localhost', 'root', '', 'crawler');
    $con = new mysqli('localhost', 'root', '', 'crawler');
//    mysqli_query($con, "SET character_set_results=utf8");
    $con->query("SET character_set_results=utf8");
    mb_language('uni');
    mb_internal_encoding('UTF-8');
//    mysqli_query($con, "set names 'utf8'");
    $con->query("set names 'utf8'");
    $html = file_get_html('http://hamikar.com');
    foreach ($html->find('div.indexJobsRow') as $item) {
        $data[] = $item->plaintext;
    }
    foreach (array_reverse($data) as $item){
        $title = $item;
//        mysqli_query($con, "INSERT INTO hamikar (title, url) VALUES ('$title', 'amir')");
        $con->query("INSERT INTO hamikar (title, url) VALUES ('$title', 'amir')");
    }
    echo 'ok';
 ?>