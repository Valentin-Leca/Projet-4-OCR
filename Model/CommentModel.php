<?php

namespace P4\Model;
require_once('ConnectBdd.php');

class CommentModel extends connectBDD {

    public function getComment($newsId) {
        $bdd = $this->connect();
        $req = $bdd->prepare('SELECT comment.id, comment.content_comment, comment.author_comment, comment.id_news, DATE_FORMAT(comment.date_comment, \'%d/%m/%Y à %Hh%imin\') AS date_comment_fr FROM comment
        INNER JOIN news ON comment.id_news = news.id WHERE news.id = ? ORDER BY date_comment_fr DESC');
        $req->execute(array($newsId));
        return $req;
    }

    public function postComment($contentComment, $authorComment, $idNews) {
        $bdd = $this->connect();
        $req = $bdd->prepare('INSERT INTO comment(content_comment, author_comment, id_news) VALUES(?, ?, ?)');
        $req->execute(array($contentComment, $authorComment, $idNews));
    }

    public function reportComment($id) {
        $bdd = $this->connect() ;
        $req = $bdd->prepare('UPDATE comment SET report = report +1 WHERE id = ?');
        $req->execute(array($id));
    }
}