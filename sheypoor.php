<?php
    require 'Requests-1.7.0/library/Requests.php';
    require 'simple_html_dom/simple_html_dom.php';
    Requests::register_autoloader();

    function sheypoor()
    {
        $response = Requests::get('http://www.sheypoor.com/search?c=43618&r=8&a68110%5B%5D=440502');
        $html = new simple_html_dom();
        $html->load_file($response->url);

        foreach ($html->find('h2 a') as $item){
            echo $item;
            echo "<hr>";
        }
    }
    sheypoor();
?>