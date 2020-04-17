<?php

require_once('bdd-connect.php');

$req = $bdd->prepare('SELECT * FROM user WHERE login = :login');
$req->execute(array(
    'login' => $_POST['login']));
$donnees = $req->fetch();


$goodPassword = password_verify($_POST['password'], $donnees['password']);

if (!$donnees)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($goodPassword) {
        session_start();
        $_SESSION['id'] = $donnees['id'];
        $_SESSION['pseudo'] = $donnees['login'];
        $_SESSION['name'] = $donnees['name'];
        $_SESSION['firt_name'] = $donnees['first_name'];
        $_SESSION['id_admin'] = $donnees['id_admin'];
        header('Location: ../Vue/home-page.php');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}