<?php

class Menu
{


    // Create New Menu

    static function createNewMenu($name, $target, $icone)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        $createMenu = $bdd->prepare('INSERT into menus (name, target, icone) VALUES (?,?,?)');
        $createMenu->execute(array($name, $target, $icone));
    }

    // Get Menu

    function getMenuName($id)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $getMenuTitle = $bdd->prepare('SELECT name from menus WHERE id=?');
        $getMenuTitle->execute(array($id));

        return $getMenuTitle['name'];
    }

    // Update Menu Title

    static function setMenuName($id, $name)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $setName = $bdd->prepare('UPDATE menus SET name = ? WHERE id = ?');
        $setName->execute(array($name, $id));
    }

    // Update Menu Target

    static function setMenuTarget($id, $target)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $setTarget = $bdd->prepare('UPDATE menus SET target = ? WHERE id = ?');
        $setTarget->execute(array($target, $id));
    }

    // Update Menu Icone

    static function setMenuIcone($id, $icone)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $setIcone = $bdd->prepare('UPDATE menus SET icone = ? WHERE id = ?');
        $setIcone->execute(array($icone, $id));
    }
}
