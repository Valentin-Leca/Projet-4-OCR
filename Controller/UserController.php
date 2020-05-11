<?php

namespace P4\Controller;

use P4\Model\UserModel;

require_once('Model/UserModel.php');

class UserController {

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
            $_SESSION['badLogin'] = "Malheureusement votre login existe déjà. Veuillez en trouver un autre.";
            require_once('View/create-account.php');
            die();
        }
        if ($password == $passwordBis) {
            $passSecure = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $dataCreateUserAccount = new UserModel();
            $data = $dataCreateUserAccount->dataCreateAccount($_POST['name'], $_POST['firstName'], $_POST['mailAdress'], $_POST['login'], $passSecure);
            $_SESSION['createAccountSucces'] = "Votre compte a été créé avec succès. Vous pouvez vous connecter.";
            require_once('View/connection.php');
        } else {
            $_SESSION['badPassword'] = "Vos mots de passes ne sont pas identiques.";
            require_once('View/create-account.php');
            die();
        }
    }

    public function connectUserAccount() {
        $dataUserAccount = new UserModel();
        $data = $dataUserAccount->connectAccount($_GET['login']);

        $goodPassword = password_verify($_POST['password'], $data['password']);

        if (!$data) {
            $_SESSION['errorAtConnection'] = "Mauvais identifiant ou mot de passe !";
            header('Location: index.php?connection');
        }
        else {
            if ($goodPassword) {
                session_start();
                $_SESSION['login'] = $data['login'];
                $_SESSION['id_admin'] = $data['id_admin'];
                header('Location: index.php');
            }
            else {
                $_SESSION['errorAtConnection'] = "Mauvais identifiant ou mot de passe !";
                header('Location: index.php?connection');
            }
        }

    }

    public function disconnectUserAccount() {
        $_SESSION = array();
        session_destroy();
        unset($_SESSION['timeOut']);

        header('Location: index.php');
    }

    public function getAdminPanelPage() {
        require_once('View/admin-panel.php');
    }

    public function getAboutPage() {
        require_once('View/about.php');
    }

    public function getContactPage() {
        require_once('View/contact.php');
    }
}