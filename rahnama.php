<?php 
    require 'Requests-1.7.0/library/Requests.php';
    require 'simple_html_dom/simple_html_dom.php';
    Requests::register_autoloader();
    // $response = Requests::get('http://www.rahnama.com/cat/index/id/37859/page/1/برنامه-نويس');
    
    $response = Requests::get('http://www.rahnama.com/cat/index/id/37917/%D8%B7%D8%B1%D8%A7%D8%AD-(%D9%88%D8%A8-%D8%B3%D8%A7%D9%8A%D8%AA)');

    $html = new simple_html_dom();
    $html->load_file($response->url);

    foreach ($html->find('div#listings a') as $item){
        if (!$item->attr['class'] == 'addtofav') {
            echo $item;
            echo "<hr>";
        }
    }
 ?>