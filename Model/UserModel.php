<?php

namespace P4\Model;
require_once('ConnectBdd.php');

class UserModel extends ConnectBdd {

    public function compareLogin($loginForm) {
        $bdd = $this->connect();
        $req = $bdd->prepare('SELECT * FROM user WHERE login = ?');
        $req->execute(array($loginForm));
        $dataUser = $req->fetch();
        return $dataUser;
    }

    public function dataCreateAccount($name, $firstName, $mailAdress, $login, $passSecure) {
        $bdd = $this->connect();
        $req = $bdd->prepare('INSERT INTO user(name, first_name, mail_adress, login, password) VALUES(?, ?, ?, ?, ?)');
        $req->execute(array($name, $firstName, $mailAdress, $login, $passSecure));
    }

    public function connectAccount() {
        $bdd = $this->connect();
        $req = $bdd->prepare('SELECT * FROM user WHERE login = :login');
        $req->execute(array('login' => $_POST['login']));
        $data = $req->fetch();
        return $data;
    }
}