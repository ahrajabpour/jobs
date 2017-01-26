<?php
    /*
     * first step hamikar
     *
     */
    // include_once ('Requests-1.7.0/library/Requests.php');
    // Requests::register_autoloader();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crawler";
    function get_newBook($url)
    {
        // $response = Requests::get($url, header( 'Content-Type: text/html; charset=utf-8' ));
        $doc = new DOMDocument();
        $doc->loadHTMLFile($url);
        $links = $doc->getElementsByTagName('a');
        foreach($links as $link) {
            if (substr_compare($link->getAttribute('href'), '/fa/guest/job/home/', 0,18) == 0) {
                // $result[] = ['url' => $link->getAttribute('href'), 'text' => $link->textContent];
                $result[] = $link->textContent;
                break;
            }
        }
        return array_reverse($result);
       // var_dump($result);
    }
?>