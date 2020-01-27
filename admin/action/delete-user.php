<?php

require('../../db_connect.php');
session_start();

if (!(isset($_SESSION['username']))) {
    header("Location:" . $url_path . "connexion.php");
}


$removeUser = $bdd->prepare('DELETE FROM user WHERE id = ?');
$removeUser->execute(array($_GET['user']));

header("Location:" . $url_path . "/admin/utilisateurs.php");
