<?php
    function new_test($url){
// div#listings a
        $doc = new DOMDocument();
        $doc->loadHTMLFile($url);
        $xpath = new DOMXPath($doc);
        // $list = $xpath->query('//div[@class  = "menu"]/ul/li/a');
        $list = $xpath->query('//div[@id  = "listings"]//img');
        foreach ($list as $item){
            // echo $item->textContent."\n";
            var_dump($item);
            echo '<hr>';
            break;
        }
//        echo($list->item(0)->nodeValue);
//        var_dump($list);
    }
    // new_test('http://localhost/BookShop/public/');
    new_test('http://www.rahnama.com/cat/index/id/37859/page/1/برنامه-نويس');
//    new_test('http://taxi-driver.ir');
?>