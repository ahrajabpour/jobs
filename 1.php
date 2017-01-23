<?php
    /*
     * first step hamikar
     *
     */
    include_once ('Requests-1.7.0/library/Requests.php');
    Requests::register_autoloader();
    function get_newBook($url)
    {
        $response = Requests::get($url);
        $doc = new DOMDocument();
        $doc->loadHTML($response->body);
        $links = $doc->getElementsByTagName('a');
        foreach($links as $link) {
            if (substr_compare($link->getAttribute('href'), '/fa/guest/job/home/', 0,18) == 0) {
                $result[] = ['url' => $link->getAttribute('href'), 'text' => $link->textContent];
                break;
            }
        }
        return array_reverse($result);
//        var_dump($result);
    }
   get_newBook('http://www.hamikar.com/');
?>