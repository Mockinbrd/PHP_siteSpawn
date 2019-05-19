<?php

function add_spawn ($db) {

    $req = $db->prepare('INSERT INTO spawnsimages (title, link) VALUES (:titre, :lien) ');
    $req->execute(array(
        'titre' => $_POST['title'],
        'lien' => $_POST['link']));

    echo 'Le Spawn a bien été ajouté!';

    header('Location : index.php?page=home ');

}


?>