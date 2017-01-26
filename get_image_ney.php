<?php
    require 'Requests-1.7.0/library/Requests.php';
    require 'simple_html_dom/simple_html_dom.php';
    Requests::register_autoloader();
    $response = Requests::get('http://nashreney.com/');


    $html = new simple_html_dom();
    $html->load_file($response->url);

    foreach ($html->find('img.cover') as $item){
        echo $item."<br>";
    }
?>