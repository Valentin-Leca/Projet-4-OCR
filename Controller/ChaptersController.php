<?php

namespace P4\Controller;

use P4\Model\ChaptersModel;
use P4\Model\CommentModel;

require_once('Model/ChaptersModel.php');
require_once('Model/CommentModel.php');

class ChaptersController
{
    public function getChaptersHomePage()
    {
        $dataChaptersModel = new ChaptersModel();
        $data = $dataChaptersModel->getChaptersHomePage();
        require_once('View/home-page.php');
    }

    public function getOneChapterPage()
    {
        $dataChaptersModel = new ChaptersModel();
        $data = $dataChaptersModel->getOneChapterPage($_GET['id']);
        $dataCommentModel = new CommentModel();
        $comment = $dataCommentModel->getComment($_GET['id']);
        require_once('View/one-chapter.php');
    }

    public function getListChapters()
    {
        $dataChaptersModel = new ChaptersModel();
        $data = $dataChaptersModel->getListChapters();
        require_once('View/list-chapter.php');
    }
}