<?php

require_once('bdd-connect.php');

$req = $bdd->prepare('SELECT id, title, content, author,
 DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation_fr FROM news WHERE id = ?');

$req->execute(array($_GET['id']));