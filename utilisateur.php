<?php

require('./db_connect.php');
session_start();
require('classes/User.php');

if (!(isset($_GET['user']))) {
    header("Location:" . $url_path);
}

$singleUser = User::getSingleUser($_GET['user']);

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $site_title . ' - Profil de "' . $singleUser['username'] . '"' ?></title>
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
                    <div class="col-md-12 pt-lg-5 mt-lg-5">

                        <!-- Card -->
                        <div class="card card-cascade wider reverse mt-lg-5 ">

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center text-white">

                                <!-- Title -->
                                <h3 class="font-weight-bold"><?php echo strtoupper($singleUser['username']) ?></h3>
                                <img class="card-img-top w-25 mx-auto mt-2 mb-2  " src="./img/users/<?php echo $singleUser['avatar'] ?>" alt="Sample image">
                                <p ><?php echo $singleUser['email'] ?></p>
                                


                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->


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