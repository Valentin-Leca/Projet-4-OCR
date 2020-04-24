<?php

namespace P4\Model;
require_once('ConnectBdd.php');

class ChaptersModel extends ConnectBdd {

    public function getChaptersHomePage() {
        $bdd = $this->connect();
        $req = $bdd->prepare('SELECT id, title, content, 
        SUBSTR(content, 1, 100) AS content_extrait , author,
        DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation_fr FROM news ORDER BY id DESC LIMIT 5');

        $req->execute(array());
        return $req;
    }

    public function getOneChapterPage($id) {
        $bdd = $this->connect();
        $req = $bdd->prepare('SELECT id, title, content, author,
        DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation_fr FROM news WHERE id = ?');

        $req->execute(array($_GET['id']));
        return $req;
    }

    public function getListChapters() {
        $bdd = $this->connect();
        $req = $bdd->prepare('SELECT id, title, content, SUBSTR(content, 1, 100) 
        AS content_extrait , author,
        DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation_fr FROM news');

        $req->execute(array());
        return $req;
    }
}