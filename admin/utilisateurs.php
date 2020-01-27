<?php

require('../db_connect.php');
session_start();

if (!(isset($_SESSION['username']))) {
    header("Location:" . $url_path . "connexion.php");
}



$getUsers = $bdd->query('SELECT * FROM user ORDER by registration_date ASC');



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $site_title . ' - Utilisateurs' ?></title>
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
            <section class=" text-center text-lg-left mt-lg-5 ">



                <div class=" row mx-md-2">
                    <div class="col-12 mx-auto">
                        <!-- Material form login -->
                        <div class="card mt-lg-5 pb-5">

                            <!--Card content-->
                            <div class="card-body text-center">

                                <h2><i class="fas fa-users my-5"></i> Gestion des Utilisateurs</h2>

                                <div class="d-flex flex-row flex-wrap justify-content-around">

                                    <?php while ($singleUser = $getUsers->fetch()) { ?>


                                        <div class="single-result-admin col-12 col-lg-3 p-2 mr-1 mb-2">
                                            
                                            <div class="row">
                                            
                                                <div class="col-12 col-md-5">
                                                <img src="../img/users/<?php echo $singleUser['avatar'] ?>" class="users-single-avatar" />
                                                </div>
                                                <div class="col-12 col-md-7 pt-md-4">
                                                <h5><?php echo $singleUser['username'] ?></h5>
                                                <h6><?php echo $singleUser['email'] ?></h6>
                                                </div>

                                            </div>
                                            <div class="row w-100">
                                                <div class="col-12 col-md-6">
                                                    <a href="<?php echo $url_path . 'admin/edit-user.php?user=' . $singleUser['id'] ?>"  class="btn btn-outline-danger w-100 <?php if($singleUser['username'] == "remicorso"){ echo "disabled";}?>">Modifier</a>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <a href="<?php echo $url_path . 'admin/action/delete-user.php?user=' . $singleUser['id'] ?>" class="btn btn-danger w-100 <?php if($singleUser['username'] == "remicorso"){ echo "disabled";}?>">Supprimer</a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>

                                </div>


                                <div class="d-flex flex-row justify-content-center col-12 mt-4">
                                    <a href="<?php echo $url_path . 'admin' ?>" class="btn btn-danger rounded-0"><i class="fas fa-chevron-left"></i> Retour à l'Administration</a>
                                    <a href="<?php echo $url_path . 'admin/creer-user.php' ?>" class="btn btn-success rounded-0"><i class="fas fa-plus"></i> Créer un Utilisateur</a>
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