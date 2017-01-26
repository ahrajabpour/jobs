<?php
    require 'Requests-1.7.0/library/Requests.php';
	require 'simple_html_dom/simple_html_dom.php';
    Requests::register_autoloader();
    $response = Requests::get('http://taxi-driver.ir');
//    $response = Requests::get('http://hamikar.com');
//    $response = Requests::get('http://academy-it.ir');
    $html = file_get_html($response->url);

    /*
     * Find all item of element
     * */

    foreach ($html->find('a') as $item){
        $links['href'] = $item->href;
        $links['text'] = $item->plaintext;
        $data[] = $links;
    }
    foreach ($data as $value){
        if ($value['href'] && $value['text']) {
            echo $value['text'] . ' => ' . $value['href'] . '<br>';
        }
    }

    /*
     *
     *  find element with specific class
     *
     * */


//    foreach ($html->find('div.reason') as $item){
//        echo $item->plaintext;
//        echo '<br>';
//    }
 ?>