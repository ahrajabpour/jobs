<?php
    require 'Requests-1.7.0/library/Requests.php';
    require 'simple_html_dom/simple_html_dom.php';
    Requests::register_autoloader();
    $response = Requests::get('http://taxi-driver.ir/');

    $html = new simple_html_dom();
    $html->load_file($response->url);

    /*
     *
     * elements with class or id
    */

//    foreach ($html->find('div[id]') as $item) {
//        if ($item->plaintext) {
//            echo $item->plaintext . '<br>';
//        }
//    }

    /*
     *  descendants selectors
     * example table td[align=center]
     *
     * */

//    foreach ($html->find('div.reason h1') as $item){
//        echo $item->plaintext;
//    }

    /*
     * nested selectors
     * */
//    foreach($html->find('ul ul', 0)->children(0)->first_child() as $child)
//    {
//        echo $child->plaintext;
//    }

    foreach($html->find('ul ul', 0)->children(0)->children(0) as $child)
        {
            echo $child->plaintext;
        }

?>