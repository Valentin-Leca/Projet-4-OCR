<?php

namespace P4\Model;

class ConnectBdd {
    protected function connect() {
        try {
            $bdd = new \PDO('mysql:host=localhost;dbname=projet_4;charset=utf8', 'root', '');
            return $bdd;
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}