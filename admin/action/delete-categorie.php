<?php

require('../../db_connect.php');
session_start();

if (!(isset($_SESSION['username']))) {
    header("Location:" . $url_path . "connexion.php");
}


$removeArticle = $bdd->prepare('DELETE FROM categories WHERE id = ?');
$removeArticle->execute(array($_GET['categorie']));

header("Location:" . $url_path . "/admin/categories.php");
