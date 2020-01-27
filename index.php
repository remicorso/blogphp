<?php
require('./db_connect.php');
session_start();

    $getBlog = $bdd->query('SELECT * FROM blog ORDER by date_article DESC LIMIT 6');
    $getUsers = $bdd->query('SELECT username, email, avatar, DATE_FORMAT(registration_date, \'%d/%m/%Y\') AS date  FROM user ORDER by registration_date DESC LIMIT 3');
  

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $site_title . " - Page d'Accueil" ?></title>
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

            <div class="row">
                <div class="col-12 col-lg-6  mb-2 mb-lg-0">

                <!--Section: Cards-->
                <section class="text-center">

                <h2 class=" text-white p-2">Bienvenue 


                    <?php if(isset($_SESSION['username'])){
                     echo $_SESSION['username'];
                     } else{
                     echo 'Visiteur';
                     } ?>
                    !</h2>

                <!-- Carousel Start -->

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner-1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner-1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner-1.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev mr-auto" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<h2 class="title-block text-white p-2 mt-3">Derniers Utilisateurs</h2>

<div id="last_user" class="row mx-0 d-flex justify-content-around">
<?php  while($singleUser = $getUsers->fetch()){ ?>
    <div class="col-12 col-md-4 card d-flex flex-column justify-content-center p-4">
    <img src="img/users/<?php echo $singleUser['avatar'] ?>" class="users-single-avatar mx-auto mt-4 mb-2" />
     <h6><?php echo strtoupper($singleUser['username']) ?></h6>
     <p class="mb-3"><?php echo $singleUser['email'] ?></p>
     <p class="mb-3">Inscrit le : <?php echo $singleUser['date'] ?></p>
    </div>
<?php } ?>

</div>

                <!-- Carousel End -->


                </section>
                <!--Section: Cards-->

                </div>
                <div class="col-12 col-lg-6">

                    <!--Section: Cards-->
                    <section class="text-center">

                    <h2 class="title-block text-white p-2">Derniers Articles</h2>

                        <!--Grid row-->
                        <div class="row wow fadeIn">

                            <?php  while($singleArticle = $getBlog->fetch()){ ?>

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-1">

                                <!--Card-->
                                <div class="card rounded-0">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="./img/articles/<?php echo $singleArticle['image'] ?>"
                                            class="card-img-top" alt="">
                                        <a
                                            href="<?php echo $url_path . 'article.php?article=' . $singleArticle['id'] ?>">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <h4 class="card-title"><?php echo $singleArticle['titre'] ?></h4>
                                        <!--Text-->
                                        <p class="card-text">Descriptif court de l'article. Cette partie est issue de la
                                            base de données.</p>
                                        <a href="<?php echo $url_path . 'article.php?article=' . $singleArticle['id'] ?>"
                                            class="btn btn-outline-danger btn-md">Article Entier
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

                    </section>
                    <!--Section: Cards-->

                </div>
            </div>



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