<?php

class Categorie
{


    // Create New Categorie

    static function createNewCategorie($name)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        $createCategorie = $bdd->prepare('INSERT into categories (name, date_creation) VALUES (?, NOW())');
        $createCategorie->execute(array($name));
    }

    // Get Title

    function getTitle($id)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $getCategorieTitle = $bdd->prepare('SELECT name from categories WHERE id=?');
        $getCategorieTitle->execute(array($id));

        return $getCategorieTitle['name'];
    }

    // Update Title

    static function setCategorieTitle($id, $title)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $setTitle = $bdd->prepare('UPDATE categories SET name = ? WHERE id = ?');
        $setTitle->execute(array($title, $id));
    }
}
