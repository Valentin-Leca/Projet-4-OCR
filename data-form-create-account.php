<?php

require_once('bdd-connect.php');

$password = $_POST['password'];
$passwordBis = $_POST['passwordBis'];

if ($password == $passwordBis) {
    $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $req = $bdd->prepare('INSERT INTO user (name, first_name, mail_adress, login, password) VALUES(?, ?, ?, ?, ?)');
    $req->execute(array($_POST['lastName'], $_POST['firstName'], $_POST['mailAdress'], $_POST['login'], $pass_hache));

    header('Location: create-account-succes.php');
} else {
    header('Location: create-account-error.php');
}