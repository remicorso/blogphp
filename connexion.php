<?php

require('./db_connect.php');
session_start();

if (isset($_SESSION['username'])) {
    header("Location:" . $url_path . "/admin");
}


if (isset($_POST['submit'])) {


    $checkUser = $bdd->prepare('SELECT * FROM user WHERE username = ?');
    $checkUser->execute(array($_POST['username']));
    $loginUser = $checkUser->fetch();

    if ($loginUser) {

        $hashedPass = md5($_POST['password']);

        if ($hashedPass == $loginUser['password']) {
            $_SESSION['id'] = $loginUser['id'];
            $_SESSION['username'] = $loginUser['username'];
            header("Location:" . $url_path . "admin");
        } else {
            $error_msg = "Mauvais mot de passe.";
        }
    } else {
        $error_msg = "Ce nom d'utilisateur est introuvable.";
    }
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $site_title . ' - Connexion' ?></title>
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
    <main class="mt-5 pt-5">
        <div class="container-fluid pt-2">



            <!--Section: Content-->
            <section class="p-5 text-center text-lg-left ">



                <div class=" row my-5 mx-md-5">
                    <div class="col-md-6 mx-auto">
                        <!-- Material form login -->
                        <div class="card mt-lg-5">

                            <!--Card content-->
                            <div class="card-body">

                                <!-- Form -->
                                <form class="text-center" style="color: #757575;" action="" method="post">

                                    <h3 class="font-weight-bold my-4 pb-2 text-center text-white">Connexion</h3>

                                    <!-- Name -->
                                    <input type="text" id="defaultSubscriptionFormUsername" name="username" class="form-control mb-4 rounded-0 text-center w-50 mx-auto" placeholder="Nom d'utilisateur">

                                    <!-- Email -->
                                    <input type="password" id="defaultSubscriptionFormPassword" name="password" class="form-control rounded-0 text-center w-50 mx-auto" placeholder="Mot de Passe">
                                    <small id="passwordHelpBlock" class="form-text ">
                                        <a href="<?php echo $url_path . "inscription.php" ?>" class="text-danger">Créer un nouveau Compte</a>
                                    </small>

                                    <div class="text-center">

                                        <h6 class="mb-2 text-danger">
                                            <?php if (isset($error_msg)) {
                                                echo $error_msg;
                                            } ?></h6>
                                        <button type="submit" name="submit" class="btn btn-outline-danger btn-rounded my-4 waves-effect">Connexion</button>
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