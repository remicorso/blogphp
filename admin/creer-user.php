<?php

require('../db_connect.php');
require('../classes/User.php');
session_start();

if (!(isset($_SESSION['username']))) {
    header("Location:" . $url_path . "connexion.php");
}


if (isset($_POST['submit'])) {

    if (isset($_POST['username']) and (isset($_POST['password']) AND $_POST['password'] == $_POST['password_confirm']) and isset($_POST['email'])) {

      

        $usernameAvailable = User::checkUsernameAvailable($_POST['username']);
        $emailAvailable = User::checkEmailAvailable($_POST['email']);

        if($usernameAvailable){

        if($emailAvailable){

            if($_POST['password'] == $_POST['password_confirm']){

                $createNewUser =  New User();

                $createNewUser->createNewUser($_POST['username'], $_POST['password'], $_POST['email']);

        Header('Location:' . $url_path . 'admin/utilisateurs.php');

            } else {

                $error_msg = "Vos mots de passes ne correspondent pas";

            }


    } else {
        $error_msg = "Cette adresse mail est déjà utilisée";

    }
} else {
    $error_msg = "Ce nom d'utilisateur est déjà utilisé";

}
    }
}



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $site_title . ' - Création d\'un utilisateur' ?></title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="../img/favicon.png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>

    <!--Main Navigation-->
    <?php include('../include/header.php'); ?>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container-fluid pt-2">


            <!--Section: Content-->
            <section class=" text-center text-lg-left ">



                <div class=" row mx-md-2">
                    <div class="col-md-12 mx-auto">
                        <!-- Material form login -->
                        <div class="card pb-5">

                            <!--Card content-->
                            <div class="card-body text-center">

                                <h2><i class="fas fa-user-plus my-5"></i> Création d'un Utilisateur</h2>

                                <div class="d-flex flex-row flex-wrap justify-content-start">

                                <div class="single-result-admin mx-auto col-8 py-2 px-4 mr-1">
                                        <i class="fas fa-newspaper"></i> Nom d'utilisateur
                                        <form action="" method="post">
                                            <input type="text" name="username" class="form-control text-center rounded-0 mt-2 mb-4" placeholder="Entrez un nom d'utilisateur" required/>
                                            <i class="fas fa-envelope"></i> Email
                                            <input type="email" name="email" class="form-control text-center rounded-0 mt-2 mb-4" placeholder="Entrez l'adresse Mail" required />
                                            <i class="fas fa-key"></i> Mot de Passe
                                            <input type="password" name="password" class="form-control text-center rounded-0 mt-2 mb-4" placeholder="Entrez le mot de passe" required />
                                            <i class="fas fa-key"></i> Confirmer le changement
                                            <input type="password" name="password_confirm" class="form-control text-center rounded-0 mt-2 mb-4" placeholder="Veuillez confirmer le mot de passe du nouvel Utilisateur" required />
                                            <i class="fas fa-image" class="form-control text-center rounded-0 mt-2 mb-4"></i> Avatar<br />
                                            <img src="../img/users/avatar-footer.png" class="users-single-avatar" />
                                            <input type="file" name="avatar" class="form-control text-center rounded-0 mt-2 mb-4 " disabled />
                                            <?php if (isset($error_msg)) { ?>
                                                <h6><?php echo $error_msg ?></h6>
                                            <?php } ?>
                                            <div class="row w-100">

                                                <div class="col-6">
                                                    <a href="<?php echo $url_path . 'admin/utilisateurs.php' ?>" class="btn btn-outline-danger w-100">Annuler</a>
                                                </div>
                                                <div class="col-6">
                                                    <button type="submit" name="submit" class="btn btn-success w-100">Créer le nouvel Utilisateur</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                </div>

                            </div>

                        </div>
                        <!-- Material form login -->
                    </div>
                </div>


            </section>
            <!--Section: Content-->

        </div>

    </main>
    <!--Main layout-->

    <!--Footer-->
    <?php include('../include/footer.php'); ?>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
</body>

</html>