<?php

class Article
{


    // Create New Article

    static function createNewArticle($titre, $categorie, $content, $auteur)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        $createArticle = $bdd->prepare('INSERT into blog (titre, content, categorie, image, auteur, date_article) VALUES (?,?,?, "2.jpg",?, NOW())');
        $createArticle->execute(array($titre, $content, $categorie, $auteur));
    }

    // Get Single Article

    static function getSingleArticle($id)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $getOneArticle = $bdd->prepare('SELECT bl.titre, bl.image, bl.content, ca.name, DATE_FORMAT(bl.date_article, "%d/%m/%Y") as date, u.username FROM blog bl INNER JOIN user u ON bl.auteur = u.id INNER JOIN categories ca ON bl.categorie = ca.id WHERE bl.id = ?');
        $getOneArticle->execute(array($id));

        return $singleArticle = $getOneArticle->fetch();
    }

    // Get Title

    function getTitle($id)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $getArticleTitle = $bdd->prepare('SELECT titre from blog WHERE id=?');
        $getArticleTitle->execute(array($id));

        return $getArticleTitle['titre'];
    }

    // Update Title

    static function setArticleTitle($id, $title)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $setTitle = $bdd->prepare('UPDATE blog SET titre = ? WHERE id = ?');
        $setTitle->execute(array($title, $id));
    }


    // Get Categorie

    static function getCategorie($id)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $getArticleCategorie = $bdd->prepare('SELECT categorie from blog WHERE id=?');
        $getArticleCategorie->execute(array($id));

        return $getArticleCategorie['email'];
    }

    // Update Article Categorie

    static function setCategorie($id, $categorie)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $updateCategorie = $bdd->prepare('UPDATE blog SET categorie = ? WHERE id = ?');
        $updateCategorie->execute(array($categorie, $id));
    }


    // Get Article Content

    static function getContent($id)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $getArticleContent = $bdd->prepare('SELECT content from blog WHERE id=?');
        $getArticleContent->execute(array($id));

        return $getArticleContent['content'];
    }

    // Update Article Content

    static function setArticleContent($id, $content)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $updateContent = $bdd->prepare('UPDATE blog SET content = ? WHERE id = ?');
        $updateContent->execute(array($content, $id));
    }
}
