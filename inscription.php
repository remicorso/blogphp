<?php

require('./db_connect.php');
require('classes/User.php');
session_start();

if (isset($_SESSION['username'])) {
    header("Location:" . $url_path);
}


if (isset($_POST['submit'])) {


    $usernameAvailable = User::checkUsernameAvailable($_POST['username']);
    $emailAvailable = User::checkEmailAvailable($_POST['email']);

    if ($usernameAvailable) {
        if ($emailAvailable) {
            if ($_POST['password'] == $_POST['password_confirm']) {

                $passwordGood = md5($_POST['password']);

                $createNewUser =  new User();

                $createNewUser->createNewUser($_POST['username'], $passwordGood, $_POST['email']);

                $validation_msg = "Votre compte a bien été créé.<br/>Vous allez être redirigé vers la page de Connexion... Bon voyage !";
                header("Refresh:4 ; url=" . $url_path . "connexion.php");
            } else {
                $error_msg = "Les deux mots de passe ne sont pas identiques.";
            }
        } else {
            $error_msg = "L'email choisit est déjà utilisé par un autre utilisateur.";
        }
    } else {
        $error_msg = "Ce nom d'utilisateur est déjà utilisé.";
    }
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $site_title . ' - Inscription' ?></title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!--Main Navigation-->
    <?php include('./include/header.php'); ?>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5 pt-3">
        <div class="container-fluid pt-2">



            <!--Section: Content-->
            <section class="p-5 text-center text-lg-left ">



                <div class=" row my-5 mx-md-5">
                    <div class="col-md-6 mx-auto">
                        <!-- Material form login -->
                        <div class="card">

                            <!--Card content-->
                            <div class="card-body">

                                <!-- Form -->
                                <form id="inscription" class="text-center text-white" action="" method="post">

                                    <h3 class="font-weight-bold my-4 pb-2 text-center text-white">Inscription</h3>

                                    <!-- Name -->
                                    <h6>Username</h6>
                                    <input type="text" id="defaultSubscriptionFormUsername" name="username" class="form-control mb-4 rounded-0 text-center w-50 mx-auto" placeholder="Nom d'utilisateur">
                                    <!-- Email -->
                                    <h6>Email</h6>
                                    <input type="email" id="defaultSubscriptionFormEmail" name="email" class="form-control mb-4 rounded-0 text-center w-50 mx-auto" placeholder="Adresse Email">

                                    <!-- Password -->
                                    <h6>Mot de Passe</h6>
                                    <input type="password" id="defaultSubscriptionFormPassword" name="password" class="form-control mb-4 rounded-0 text-center w-50 mx-auto" placeholder="Mot de Passe">

                                    <!-- Password -->
                                    <h6>Confirmation du Mot de Passe</h6>
                                    <input type="password" id="defaultSubscriptionFormPassword" name="password_confirm" class="form-control mb-4 rounded-0 text-center w-50 mx-auto" placeholder="Confirmez le Mot de Passe">
                                    <small id="passwordHelpBlock" class="form-text">
                                        <a href="<?php echo $url_path . "connexion.php" ?>" class="text-danger">Retour au Login</a>
                                    </small>

                                    <div class="text-center">

                                        <?php if (isset($error_msg)) { ?>
                                            <h6 class="mb-2 text-danger"><?php echo $error_msg; ?></h6>
                                        <?php  }

                                        if (isset($validation_msg)) { ?>

                                            <h6 class="mb-2 text-success"><?php echo $validation_msg; ?></h6>

                                        <?php } ?>
                                        <button type="submit" name="submit" class="btn btn-outline-danger btn-rounded my-4 waves-effect">Créer mon Compte</button>
                                    </div>

                                </form>
                                <!-- Form -->

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
    <?php include('./include/footer.php'); ?>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
</body>

</html>