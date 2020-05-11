<?php
session_start();

// Automatic disconnect after 8 hours, reset after any action.
$time = time();
if (isset($_SESSION['timeOut']) && $time > $_SESSION['timeOut']) {
    session_destroy();
    unset($_SESSION['timeOut']);
    session_start();
}
$_SESSION['timeOut'] = $time + 28800;


use P4\Controller\ChaptersController;
use p4\Controller\UserController;
use p4\Controller\CommentController;

require_once('Controller\ChaptersController.php');
require_once('Controller\UserController.php');
require_once('Controller\CommentController.php');

$chaptersController = new ChaptersController();
$userController = new UserController();
$commentController = new CommentController();


if (isset($_GET['oneChapter'])) {
    $chaptersController->getOneChapterPage();
} elseif (isset($_GET['aPropos'])) {
    $userController->getAboutPage();
} elseif (isset($_GET['contact'])) {
    $userController->getContactPage();
} elseif (isset($_GET['listChapters'])) {
    $chaptersController->getListChapters();
} elseif (isset($_GET['connection'])) {
    $userController->getConnectionPage();
} elseif (isset($_GET['createAccountPage'])) {
    $userController->getPageCreateAccount();
} elseif (isset($_GET['createAccount'])) {
    $userController->createUserAccount();
} elseif (isset($_GET['postComment'])) {
    $commentController->postComment();
} elseif (isset($_GET['reportComment'])) {
    $commentController->reportComment();
} elseif (isset($_GET['login'])) {
    $userController->connectUserAccount();
} elseif (isset($_GET['disconnect'])) {
    $userController->disconnectUserAccount();
} if (isset($_SESSION['id_admin'])) {
    if ($_SESSION['id_admin'] == 1) {
        if (isset($_GET['adminPanel'])) {
            $userController->getAdminPanelPage();
        } elseif (isset($_GET["getCreationChaptersPage"])) {
            $chaptersController->getCreateChaptersPage();
        } elseif (isset($_GET['createChapters'])) {
            $chaptersController->createChapters();
        } elseif (isset($_GET['getEditChaptersPage'])) {
            $chaptersController->getDeleteChaptersPage();
        } elseif (isset($_GET['deleteChapters'])) {
            $chaptersController->deleteChapters();
        } elseif (isset($_GET['getCommentOnDeletePage'])) {
            $commentController->getCommentOnDeletePage();
        } elseif (isset($_GET['deleteComment'])) {
            $commentController->deleteComment();
        } elseif (isset($_GET['getUpdateChaptersPage'])) {
            $chaptersController->getUpdateChaptersPage();
        } elseif (isset($_GET['updateChapter'])) {
            $chaptersController->updateChapter();
        } else {
            $chaptersController->getChaptersHomePage();
        }
    } else {
        $chaptersController->getChaptersHomePage();
    }
} else {
    $chaptersController->getChaptersHomePage();
}
