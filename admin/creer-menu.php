<?php

require('../db_connect.php');
session_start();
require('../classes/Menu.php');

if (!(isset($_SESSION['username']))) {
    header("Location:" . $url_path . "connexion.php");
}

$getPages = $bdd->query('SELECT * FROM pages');

if (isset($_POST['submit'])) {

    if (isset($_POST['titre']) and isset($_POST['target']) and isset($_POST['icone'])) {

        $createNewMenu = Menu::createNewMenu($_POST['titre'], $_POST['target'], $_POST['icone']);
        Header('Location:' . $url_path . 'admin/menus.php');
    }
}



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $site_title . ' - Création d\'un élément du Menu' ?></title>
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
            <section class=" text-center text-lg-left mt-lg-5 pt-lg-5 ">



                <div class=" row mx-md-2">
                    <div class="col-md-12 mx-auto">
                        <!-- Material form login -->
                        <div class="card pb-5">

                            <!--Card content-->
                            <div class="card-body text-center ">

                                <h2><i class="fas fa-bars my-5"></i> Création d'un Élément du Menu</h2>

                                <div class="d-flex flex-row flex-wrap justify-content-start">

                                    <div class="single-result-admin mx-auto col-8 py-2 px-4 mr-1">
                                        <i class="fas fa-newspaper"></i> Titre
                                        <form action="" method="post">
                                            <input name="titre" class="form-control text-center rounded-0 mt-2 mb-4" placeholder="Choisir le nom qui apparaitra dans le Menu" />
                                            <i class="fas fa-link"></i> Lier à une page
                                            <select name="target" class="form-control text-center rounded-0 mt-2 mb-4">
                                                <?php while ($singlePage = $getPages->fetch()) { ?>
                                                    <option value="<?php echo $singlePage['target'] ?>"> <?php echo $singlePage['name'] ?></option>
                                                <?php } ?>
                                            </select>

                                            <i class="fas fa-align-left"></i> Icone
                                            <input name="icone" class="form-control text-center rounded-0 mt-2 mb-4" placeholder="Classe de l'icone Font Awesome" />
                                            <div class="row w-100">
                                                <div class="col-6">
                                                    <a href="<?php echo $url_path . 'admin/menus.php' ?>" class="btn btn-outline-danger w-100">Annuler</a>
                                                </div>
                                                <div class="col-6">
                                                    <button type="submit" name="submit" class="btn btn-success w-100">Valider un nouvel Élément du Menu</button>
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