<?php

require('./db_connect.php');
session_start();

$req = $bdd->query('SELECT COUNT(id) as nbArticle FROM blog WHERE categorie="10" ');
$data = $req->fetch();



$nbArt = $data['nbArticle'];
$perPage = 4;
$nbPage = ceil($nbArt / $perPage);

if (isset($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $nbPage) {
    $cPage = $_GET['page'];
} else {
    $cPage = 1;
}

$getBlog = $bdd->query('SELECT * FROM blog WHERE categorie="10" ORDER by date_article DESC LIMIT ' . (($cPage - 1) * $perPage) . ',' . $perPage);


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $site_title . ' - Sports' ?></title>
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


            <!--Section: Cards-->
            <section class="text-center mt-5">

                <h2 class=" text-white p-2">Blog - Sports</h2>

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn d-flex flex-row justify-content-center">

                    <?php while ($singleArticle = $getBlog->fetch()) { ?>
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-12 mb-4">

                            <!--Card-->
                            <div class="card">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="./img/articles/<?php echo $singleArticle['image'] ?>" class="card-img-top" alt="">
                                    <a href="<?php echo $url_path . 'article.php?article=' . $singleArticle['id'] ?>">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h4 class="card-title"><?php echo $singleArticle['titre'] ?></h4>
                                    <!--Text-->
                                    <p class="card-text"><?php echo substr($singleArticle['content'], 0, 80) . '...'  ?></p>
                                    <a href="<?php echo $url_path . 'article.php?article=' . $singleArticle['id'] ?>" class="btn btn-outline-danger btn-md">Lire
                                        <i class="fas fa-play ml-2"></i>
                                    </a>
                                </div>

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Grid column-->
                    <?php } ?>

                </div>
                <!--Grid row-->

                <!--Pagination-->
                <nav class="d-flex justify-content-center wow fadeIn">
                    <ul class="pagination pg-blue">


                        <!--Arrow left-->
                        <li class="page-item <?php if ($cPage == "1") {
                                                    echo 'disabled';
                                                } ?>">
                            <a class="page-link" href="<?php echo $url_path . 'blog-sports.php?page=' . ($cPage - 1);  ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <?php for ($i = 1; $i <= $nbPage; $i++) { ?>

                            <?php if ($i == $cPage) { ?>

                                <li class="page-item active">
                                    <a class="page-link" style="cursor: default"><?php echo $i ?>
                                    </a>
                                </li>

                            <?php } else { ?>

                                <li class="page-item ">
                                    <a class="page-link" href="<?php echo $url_path . 'blog-sports.php?page=' . $i ?>"><?php echo $i ?>
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>

                        <?php }
                        } ?>




                        <li class="page-item <?php if ($cPage == $nbPage) {
                                                    echo 'disabled';
                                                } ?>">
                            <a class="page-link" href="<?php echo $url_path . 'blog-sports.php?page=' . ($cPage + 1);  ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!--Pagination-->

            </section>
            <!--Section: Cards-->

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