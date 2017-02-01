<?php
    require 'Requests-1.7.0/library/Requests.php';
//    require 'simple_html_dom/simple_html_dom.php';
    Requests::register_autoloader();
    $headers = ['Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
        'X-CSRF-TOKEN'=>'g9sxM39EyEmczJM6pJtEMyA7mKJXH4i21h5CycXb'];
//    $headers = ['Content-Type' => 'application/x-www-form-urlencoded'];
    $data = ['book_name' => 'ک'];
    $response = Requests::post('http://localhost/BookShop/public/search_book', $headers, $data);

//    $doc = new DOMDocument();
//    $doc->loadHTMLFile($response->url);
    echo '<pre>';
    var_dump($response->status_code);
?>