<?php

require('../db_connect.php');
session_start();

if (!(isset($_SESSION['username']))) {
    header("Location:" . $url_path . "connexion.php");
}



$getBlog = $bdd->query('SELECT * FROM blog ORDER by date_article DESC LIMIT 6');



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $site_title . ' - Articles' ?></title>
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

                                <h2><i class="fas fa-newspaper my-5"></i> Gestion des Articles</h2>

                                <div class="d-flex flex-row flex-wrap justify-content-around">

                                    <?php while ($singleArticle = $getBlog->fetch()) { ?>


                                        <div class="single-result-admin col-12 col-lg-3 p-2 mr-1 mb-2">
                                            <i class="fas fa-newspaper"></i> <?php echo $singleArticle['titre'] ?>

                                            <img src="../img/articles/<?php echo $singleArticle['image'] ?>" class="card-img-top rounded-0 mt-1" alt="">
                                            <p class="mb-0 p-2"><?php echo substr($singleArticle['content'], 0, 80) . '...' ?></p>
                                            <div class="row w-100">
                                                <div class="col-6">
                                                    <a href="<?php echo $url_path . 'admin/edit-article.php?article=' . $singleArticle['id'] ?>"  class="btn btn-outline-danger w-100">Modifier</a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="<?php echo $url_path . 'admin/action/delete-article.php?article=' . $singleArticle['id'] ?>" class="btn btn-danger w-100">Supprimer</a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>

                                </div>


                                <div class="d-flex flex-row justify-content-center col-12 mt-4">
                                    <a href="<?php echo $url_path . 'admin' ?>" class="btn btn-danger rounded-0"><i class="fas fa-chevron-left"></i> Retour à l'Administration</a>
                                    <a href="<?php echo $url_path . 'admin/creer-article.php' ?>" class="btn btn-success rounded-0"><i class="fas fa-plus"></i> Créer un Article</a>
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