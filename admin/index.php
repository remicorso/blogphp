<?php

require('../db_connect.php');
session_start();

if (!(isset($_SESSION['username']))) {
    header("Location:" . $url_path . "connexion.php");
}


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $site_title . ' - Administration' ?></title>
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
                            <div class="card-body">

                                <div class="d-flex flex-row flex-center flex-wrap">
                                    <div class="col-5 d-flex flex-column mx-md-2 mb-4 text-center">
                                        Les Articles
                                        <a href="<?php echo $url_path ?>admin/articles.php" class="btn btn-outline-danger rounded-0"><i class="fas fa-newspaper fa-4x my-5"></i></a>
                                    </div>
                                    <div class="col-5 d-flex flex-column mx-md-2 mb-4 text-center">
                                        Les Catégories
                                        <a href="<?php echo $url_path ?>admin/categories.php" class="btn btn-outline-danger rounded-0"><i class="fas fa-folder-open fa-4x my-5"></i></a>
                                    </div>
                                    <div class="col-5 d-flex flex-column mx-md-2 mb-4 text-center">
                                        Gestion du Menu
                                        <a href="<?php echo $url_path ?>admin/menus.php" class="btn btn-outline-danger rounded-0"><i class="fas fa-bars fa-4x my-5"></i></a>
                                    </div>
                                    <div class="col-5 d-flex flex-column mx-md-2 mb-4 text-center">
                                        Utilisateurs
                                        <a href="<?php echo $url_path ?>admin/utilisateurs.php" class="btn btn-outline-danger rounded-0"><i class="fas fa-users fa-4x my-5"></i></a>
                                    </div>
                                    <div class="col-5 d-flex flex-column mx-md-2 mb-4 text-center">
                                        Slider
                                        <button href="<?php echo $url_path ?>admin/utilisateurs.php" class="btn btn-outline-danger rounded-0" disabled><i class="fas fa-image fa-4x my-5"></i></button>
                                    </div>
                                    <div class="col-5 d-flex flex-column mx-md-2 mb-4 text-center">
                                        Paramètres
                                        <button href="<?php echo $url_path ?>admin/utilisateurs.php" class="btn btn-outline-danger rounded-0" disabled><i class="fas fa-wrench fa-4x my-5"></i></button>
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