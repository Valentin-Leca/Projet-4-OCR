<?php
session_start();

$time = time();
if (isset($_SESSION['timeOut']) && $time > $_SESSION['timeOut']) {
    session_destroy();
    session_start();
}
$_SESSION['timeOut'] = $time + 28800;

use P4\Controller\ChaptersController;
use P4\Controller\OtherControllers;
use p4\Controller\UserController;
use p4\Controller\CommentController;

require_once('Controller\ChaptersController.php');
require_once('Controller\OtherControllers.php');
require_once('Controller\UserController.php');
require_once('Controller\CommentController.php');

$chaptersController = new ChaptersController();
$otherControllers = new OtherControllers();
$userController = new UserController();
$commentController = new CommentController();

if (isset($_GET['oneChapter'])) {
    $chaptersController->getOneChapterPage();
} if (isset($_GET['aPropos'])) {
    $otherControllers->getAboutPage();
} if (isset($_GET['contact'])) {
    $otherControllers->getContactPage();
} if (isset($_GET['listChapters'])) {
    $chaptersController->getListChapters();
} if (isset($_GET['connection'])) {
    $userController->getConnectionPage();
} if (isset($_GET['createAccountPage'])) {
    $userController->getPageCreateAccount();
} if (isset($_GET['createAccount'])) {
    $userController->createUserAccount();
} if (isset($_GET['postComment'])) {
    $commentController->postComment();
} if (isset($_GET['login'])) {
    $userController->connectUserAccount();
} if (isset($_GET['disconnect'])) {
    $userController->disconnectUserAccount();
} if (isset($_GET['adminPanel'])) {
    $userController->getAdminPanelPage();
} if (isset($_GET["getCreationChaptersPage"])) {
    $chaptersController->getCreateChaptersPage();
} if (isset($_GET['createChapters'])) {
    $chaptersController->createChapters();
} if (isset($_GET['getEditChaptersPage'])) {
    $chaptersController->getDeleteChaptersPage();
} if (isset($_GET['deleteChapters'])) {
    $chaptersController->deleteChapters();
} if (isset($_GET['reportComment'])) {
    $commentController->reportComment();
} if (isset($_GET['getCommentOnDeletePage'])) {
    $commentController->getCommentOnDeletePage();
} if (isset($_GET['deleteComment'])) {
    $commentController->deleteComment();
} if (isset($_GET['getUpdateChaptersPage'])) {
    $chaptersController->getUpdateChaptersPage();
} if (isset($_GET['updateChapter'])) {
    $chaptersController->updateChapter();
} else {
    $chaptersController->getChaptersHomePage();
}