<?php

class spawnsimages
{

    public $id;
    public $title;

    function __construct($id){

        global $db;

        $reqSpawnImage = $db->prepare('SELECT * FROM spawnsimages WHERE id = ?');
        $reqSpawnImage->execute([$id]);
        $data = $reqSpawnImage->fetch();

        $this->id = $id;
        $this->title = $data['Titre'];
    }


    /**
     * Envoi tous les images des Spawns
     * @return array
     */

    static function getAllSpawnsImages() {

        global $db;

        $reqSpawnsImages = $db->prepare('SELECT * FROM spawnsimages');
        $reqSpawnsImages->execute([]);
        return $reqSpawnsImages->fetchAll();
    }



}