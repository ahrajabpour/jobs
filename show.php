<?php
    $con = new mysqli('localhost', 'root', '', 'crawler');
    $result = $con->query("SELECT * FROM hamikar");
    foreach ($result as $value) {
    	echo $value['title'];
    	echo "<br>";
    }
?>