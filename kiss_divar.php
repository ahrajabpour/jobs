<?php
    require 'Requests-1.7.0/library/Requests.php';
    require 'simple_html_dom/simple_html_dom.php';
    Requests::register_autoloader();
//    $headers = array('Content-Type' => 'text/plain;charset=UTF-8');
//    $headers = array('Content-Type' => 'application/json-rpc');
    // $data = ["jsonrpc" => "2.0", "method" => "getPostList", "id" => 0,
    //     "params"=> [[["place2", 0, ["1"]], ["cat2", 0, [194]], ["cat1", 0, [191]]], 355463535839564]];
//	$data = ["jsonrpc"=>"2.0","id"=>0,"method"=>"getPostList","params"=>[[["place2",0,["1"]],["cat2",0,[194]],["cat1",0,[191]]],0]];
//	$data = ["jsonrpc"=>"2.0","id"=>0,"method"=>"getPostList","params"=>[[["place2",0,["1"]],["cat2",0,[194]],["cat1",0,[191]]],0]];
//    $data = ["jsonrpc"=>"2.0","id"=>0,"method"=>"getPostList","params"=>[[["place2",0,["1"]],["cat2",0,[194]],["cat1",0,[191]]],355472556785464]];
    $data = ["jsonrpc"=>"2.0","id"=>0,"method"=>"getPostList","params"=>[[["place2",0,["1"]],["cat1",0,[191]]],0]];
    $response = Requests::post('https://search.divar.ir/json/', $headers, json_encode($data));
    // $response = Requests::get('http://laitec.ir/');
    $result = json_decode($response->body)->result->post_list;

    foreach ($result as $item){
        var_dump($item->title);
        echo '<br>';
    }
?>