<?php

require('../db_connect.php');
require('../classes/User.php');
session_start();

if (!(isset($_SESSION['username']))) {
    header("Location:" . $url_path . "connexion.php");
}

if (!(isset($_GET['user']))) {
    header("Location:" . $url_path . "admin/utilisateurs.php");
}


$modifyUser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
$modifyUser->execute(array($_GET['user']));
$editUser = $modifyUser->fetch();


if (isset($_POST['submit'])) {

    if (isset($_POST['username']) and ($_POST['username'] != $editUser['username'])) {

        $editUsername = User::setUsername($editUser['id'], $_POST['username']);
        Header('Location:' . $url_path . 'admin/edit-user.php?user=' . $editUser['id'] . '#user-edit');
    }

    if (isset($_POST['email']) and ($_POST['email'] != $editUser['email'])) {

        $editEmail = User::setEmail($editUser['id'], $_POST['email']);
        Header('Location:' . $url_path . 'admin/edit-user.php?user=' . $editUser['id']  . '#user-edit');
    }

    if (isset($_POST['password']) and ($_POST['password'] != $editUser['password'])) {

        if (isset($_POST['password_confirm']) and $_POST['password_confirm'] == $_POST['password']) {

            $editPassword = User::setPassword($editUser['id'], $_POST['password']);
            Header('Location:' . $url_path . 'admin/edit-user.php?user=' . $editUser['id']  . '#user-edit');
        } else {
            $error_msg = "Vos mot de passes ne correspondent pas.";
        }
    } else if (isset($_POST['password']) and isset($_POST['password_confirm']) and ($_POST['password'] == $editUser['password'])) {

        $error_msg = "Votre nouveau mot de passe est indentique à votre mot de passe actuel";
    }
}



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $site_title . ' - Modification de "' . $editUser['username'] . '"' ?></title>
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
                            <div id="menu-edit" class="card-body text-center">

                                <h2><i class="fas fa-user my-5"></i> Vous modifiez le compte de <em>"<?php echo $editUser['username']; ?>"</em></h2>

                                <div class="d-flex flex-row flex-wrap justify-content-start">

                                    <div class="single-result-admin mx-auto col-8 py-2 px-4 mr-1">
                                        <i class="fas fa-newspaper"></i> Nom d'utilisateur
                                        <form action="" method="post">
                                            <input type="text" name="username" class="form-control text-center rounded-0 mt-2 mb-4" value="<?php echo $editUser['username'] ?>" />
                                            <i class="fas fa-envelope"></i> Email
                                            <input type="email" name="email" class="form-control text-center rounded-0 mt-2 mb-4" value="<?php echo $editUser['email'] ?>" />
                                            <i class="fas fa-key"></i> Mot de Passe
                                            <input type="password" name="password" class="form-control text-center rounded-0 mt-2 mb-4" value="<?php echo $editUser['password'] ?>" />
                                            <i class="fas fa-key"></i> Confirmer le changement
                                            <input type="password" name="password_confirm" class="form-control text-center rounded-0 mt-2 mb-4" placeholder="Entrez de nouveau le mot de passe si vous souhaitez le modifier" />
                                            <i class="fas fa-image" class="form-control text-center rounded-0 mt-2 mb-4"></i> Avatar<br />
                                            <img src="../img/users/avatar-footer.png" class="users-single-avatar" />
                                            <input type="file" name="avatar" class="form-control text-center rounded-0 mt-2 mb-4" disabled />
                                            <?php if (isset($error_msg)) { ?>
                                                <h6><?php echo $error_msg ?></h6>
                                            <?php } ?>
                                            <div class="row w-100">

                                                <div class="col-6">
                                                    <a href="<?php echo $url_path . 'admin/utilisateurs.php' ?>" class="btn btn-outline-danger w-100">Annuler</a>
                                                </div>
                                                <div class="col-6">
                                                    <button type="submit" name="submit" class="btn btn-success w-100">Valider les Modifications</button>
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