<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$url_path = 'http://localhost/coursphp/';


$getNaviguation = $bdd->query('SELECT * FROM menus ORDER by id ASC');

$site_title = 'Coders Blog';

$img_folder = 'http://localhost/coursphp/img/';