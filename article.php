<?php

require('./db_connect.php');
session_start();
require('classes/Article.php');

if (!(isset($_GET['article']))) {
    header("Location:" . $url_path);
}

$singleBlogArticle = Article::getSingleArticle($_GET['article']);

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $site_title . ' - ' . $singleBlogArticle['titre'] ?></title>
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
        <div class="container pt-2">

            <!--Section: Content-->
            <section class="mx-md-5 dark-grey-text">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12">

                        <!-- Card -->
                        <div class="card card-cascade wider reverse">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="./img/articles/<?php echo $singleBlogArticle['image'] ?>" alt="Sample image">


                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center text-white">

                                <!-- Title -->
                                <h3 class="font-weight-bold"><?php echo $singleBlogArticle['titre'] ?></h3>
                                <!-- Data -->
                                <p>Écrit par <a><strong><?php echo $singleBlogArticle['username'] ?></strong></a>, le <?php echo $singleBlogArticle['date'] ?></p>
                                <h5>Catégorie : <strong><?php echo $singleBlogArticle['name'] ?></strong></h5>


                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->

                        <!-- Excerpt -->
                        <div class="mt-5 mb-5">

                            <p class="text-center text-white"><?php echo nl2br($singleBlogArticle['content']) ?></p>

                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->
            </section>
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