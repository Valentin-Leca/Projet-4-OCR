<?php

require_once('bdd-connect.php');

$req = $bdd->prepare('SELECT id, title, content, SUBSTR(content, 1, 100) AS content_extrait , author,
 DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation_fr FROM news ORDER BY id DESC LIMIT 5');

$req->execute(array());