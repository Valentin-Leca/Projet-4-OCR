<?php

namespace P4\Controller;

use P4\Model\UserModel;

require_once('Model/UserModel.php');

class UserController
{

    public function getConnectionPage()
    {
        require_once('View/connection.php');
    }

    public function getPageCreateAccount()
    {
        require_once('View/create-account.php');
    }

    public function createUserAccount()
    {
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


}
