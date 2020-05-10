<?php

namespace P4\Controller;

use P4\Model\UserModel;

require_once('Model/UserModel.php');

class UserController
{

    public function getConnectionPage() {
        require_once('View/connection.php');
    }

    public function getPageCreateAccount() {
        require_once('View/create-account.php');
    }

    public function createUserAccount() {
        $password = $_POST['password'];
        $passwordBis = $_POST['passwordBis'];
        $loginForm = $_POST['login'];

        $compareLogin = new UserModel();
        $checkLogin = $compareLogin->compareLogin($loginForm);
        if ($_POST['login'] == $checkLogin['login']) {
            $error = "votre login est déjà utilisé.";
            echo 'erreur, le login est déjà utilisé NOOB !';
            die();
        }
        if ($password == $passwordBis) {
            $passSecure = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $dataCreateUserAccount = new UserModel();
            $data = $dataCreateUserAccount->dataCreateAccount($_POST['name'], $_POST['firstName'], $_POST['mailAdress'], $_POST['login'], $passSecure);
            require_once('View/create-account-succes.php');
        } else {
            require_once('View/create-account-error.php');
        }
    }

    public function connectUserAccount() {
        $dataUserAccount = new UserModel();
        $data = $dataUserAccount->connectAccount($_GET['login']);

        $goodPassword = password_verify($_POST['password'], $data['password']);

        if (!$data)
        {
            echo 'Mauvais identifiant ou mot de passe !';
        }
        else
        {
            if ($goodPassword) {
                session_start();
                $_SESSION['login'] = $data['login'];
                $_SESSION['id_admin'] = $data['id_admin'];
                header('Location: index.php');
            }
            else {
                echo 'Mauvais identifiant ou mot de passe !';
            }
        }

    }

    public function disconnectUserAccount() {

        $_SESSION = array();
        session_destroy();
        unset($_SESSION['token']);

        header('Location: index.php');
    }

    public function getAdminPanelPage() {
        require_once('View/admin-panel.php');
    }
}



















