<?php

namespace P4\Controller;

use P4\Model\CommentModel;

require_once('Model/CommentModel.php');

class CommentController {

    public function postComment() {
        $authorComment = $_SESSION['login'];
        $dataCommentModel = new CommentModel();
        $data = $dataCommentModel->postComment($_POST['contentComment'], $authorComment, $_GET['id']);
    }
}