<?php

session_start();

$_SESSION = array();
session_destroy();

header('Location: ../Vue/home-page.php');