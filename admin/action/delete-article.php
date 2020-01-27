<?php

require('../../db_connect.php');
session_start();

if (!(isset($_SESSION['username']))) {
    header("Location:" . $url_path . "connexion.php");
}


$removeArticle = $bdd->prepare('DELETE FROM blog WHERE id = ?');
$removeArticle->execute(array($_GET['article']));

header("Location:" . $url_path . "/admin/articles.php");
