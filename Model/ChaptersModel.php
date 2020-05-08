<?php

namespace P4\Model;
require_once('ConnectBdd.php');

class ChaptersModel extends ConnectBdd {

    public function getChaptersHomePage() {
        $bdd = $this->connect();
        $req = $bdd->prepare('SELECT id, title, content, author,
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
        $req = $bdd->prepare('SELECT id, title, content, author,
        DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation_fr FROM news');
        $req->execute(array());
        return $req;
    }

    public function createChapters($title, $content) {
        $bdd = $this->connect();
        $req = $bdd->prepare('INSERT INTO news(title, content) VALUES(?, ?)');
        $req->execute(array($title, $content));
    }

    public function deleteChapters($id) {
        $bdd = $this->connect();
        $req = $bdd->prepare('DELETE FROM news WHERE id = ?');
        $req->execute(array($id));
    }

    public function getUpdateChaptersPage() {
        $bdd = $this->connect();
        $req = $bdd->prepare('SELECT id, title, content FROM news WHERE id = ?');
        $req->execute(array($_GET['id']));
        return $req;
    }

    public function updateChapter($title, $content, $id) {
        $bdd = $this->connect();
        $req = $bdd->prepare('UPDATE news SET title = ?, content = ? WHERE id = ?');
        $req->execute(array($title, $content, $id));
    }
}