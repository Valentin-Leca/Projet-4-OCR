<?php

namespace P4\Controller;

use P4\Model\CommentModel;

require_once('Model/CommentModel.php');

class CommentController {

    public function postComment() {
        $authorComment = $_SESSION['login'];
        $dataCommentModel = new CommentModel();
        $data = $dataCommentModel->postComment($_POST['contentComment'], $authorComment, $_GET['id']);
        header('Location: index.php?oneChapter&id='.$_GET['id']);
    }

    public function reportComment() {
        $id = $_GET['id'];
        $reportComment = new CommentModel();
        $data = $reportComment->reportComment($id);
        header('Location: index.php');
    }
}