<?php
    require 'Requests-1.7.0/library/Requests.php';
    Requests::register_autoloader();
    $headers = array('Content-Type' => 'application/json');
    $data = ["jsonrpc" => "2.0", "method" => "getPostList", "id" => 0,
        "params"=> [[["place2", 0, ["1"]], ["cat2", 0, [194]], ["cat1", 0, [191]]], 355463535839564]];
    $response = Requests::post('https://search.divar.ir/json/', $headers, json_encode($data));
    $doc = new DOMDocument();
    $doc->loadHTMLFile($response->body);
?>