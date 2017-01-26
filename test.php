<?php
    require ('simple_html_dom/simple_html_dom.php');
    // $pdo = new PDO("mysql:host=localhost;dbname=crawler","root","");
/*
	connect
*/
	$server="localhost";
	$user="root";
	$pass="";
	$db="crawler";
	// mysql_connect($server,$user,$pass)or die(mysql_error());
	// mysql_select_db($db)or die(mysql_error());
/*
	end connect
*/
	$dbLink = mysql_connect($server, $user, $pass);
//    mysql_query("SET character_set_results=utf8", $dbLink);
//    mb_language('uni');
//    mb_internal_encoding('UTF-8');
//    mysql_select_db($db, $dbLink);
//    mysql_query("set names 'utf8'",$dbLink);

    $html = file_get_html('http://hamikar.com');
    foreach ($html->find('div.indexRowShow') as $item){
        $title = $item->plaintext;
        mysql_query("INSERT INTO hamikar (title, url) VALUES ('$title', 'amir')");
    }
?>