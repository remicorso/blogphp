<?php

require('../../db_connect.php');
session_start();

if (!(isset($_SESSION['username']))) {
    header("Location:" . $url_path . "connexion.php");
}


$removeMenu = $bdd->prepare('DELETE FROM menus WHERE id = ?');
$removeMenu->execute(array($_GET['menu']));

header("Location:" . $url_path . "/admin/menus.php");
