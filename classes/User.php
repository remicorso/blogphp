<?php





class User
{


    private $username;
    private $password;
    private $email;
    private $avatar;




    function __construct()
    { }


    // Create New User

    static function createNewUser($username, $password, $email)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }



        $createUser = $bdd->prepare('INSERT into user (username, password, email, avatar, registration_date) VALUES (?,?,?, "avatar-footer.png", NOW())');
        $createUser->execute(array($username, $password, $email));
    }

    // Get Single Article

    static function getSingleUser($id)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $getOneUser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
        $getOneUser->execute(array($id));

        return $singleUser = $getOneUser->fetch();
    }


    // Get Username

    function getUsername($id)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $getUsername = $bdd->prepare('SELECT username from user WHERE id=?');
        $getUsername->execute(array($id));

        return $getUsername['username'];
    }

    // Update Username

    static function setUsername($id, $username)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $updateUsername = $bdd->prepare('UPDATE user SET username = ? WHERE id = ?');
        $updateUsername->execute(array($username, $id));
    }

    // Get User Email

    static function getEmail($id)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $getUserMail = $bdd->prepare('SELECT email from user WHERE id=?');
        $getUserMail->execute(array($id));

        return $getUserMail['email'];
    }

    // Update User Email

    static function setEmail($id, $email)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $updateEmail = $bdd->prepare('UPDATE user SET email = ? WHERE id = ?');
        $updateEmail->execute(array($email, $id));
    }


    // Update User Password

    static function setPassword($id, $password)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $updatePassword = $bdd->prepare('UPDATE user SET password = ? WHERE id = ?');
        $updatePassword->execute(array($password, $id));
    }

    // Check if the Username is Available to create a New User

    static function checkUsernameAvailable($username)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        $getAllUsers = $bdd->prepare('SELECT * from user WHERE username=?');
        $getAllUsers->execute(array($username));
        $allUsers = $getAllUsers->fetch();

        if ($allUsers == true) {
            return false;
        } else {
            return true;
        }
    }


    // Check if the email is Available to create a New User


    static function checkEmailAvailable($email)
    {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        $getAllEmails = $bdd->prepare('SELECT * from user WHERE email=?');
        $getAllEmails->execute(array($email));
        $allEmails = $getAllEmails->fetch();

        if ($allEmails == true) {
            return false;
        } else {
            return true;
        }
    }
}
