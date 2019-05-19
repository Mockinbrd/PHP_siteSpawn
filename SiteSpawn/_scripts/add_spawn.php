<?php


$req = $db->prepare('INSERT INTO spawnsimages VALUES (count(id)+1, '?', '?')');
$req->execute(array($_GET['title'], $_GET['link']));


?>