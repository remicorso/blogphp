<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="<?php echo $url_path ?>">
                <img class="img-fluid logo" src="<?php echo $img_folder ?>logo.png" alt="Mon super Blog !">
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Right -->
                <ul class="navbar-nav ml-auto">
                    <?php while ($singleNav = $getNaviguation->fetch()) { ?>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="<?php echo $url_path . $singleNav['target'] ?>"><i class="<?php echo $singleNav['icone'] ?>"></i> <?php echo $singleNav['name'] ?>
                            </a>
                        </li>
                    <?php } ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link waves-effect" href="<?php echo $url_path ?>blog.php"><i class="fas fa-newspaper"></i> Actualités</a>
                    </li> -->

                    <?php

                    if (isset($_SESSION['id'])) { ?>

                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="<?php echo $url_path ?>admin/"><i class="fas fa-wrench"></i> Administration</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="<?php echo $url_path ?>action/logout.php"><i class="fas fa-power-off text-danger"></i> Déconnexion</a>
                        </li>

                    <?php } else { ?>

                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="<?php echo $url_path ?>connexion.php"><i class="fas fa-power-off"></i> Connexion</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="<?php echo $url_path ?>inscription.php"><i class="fas fa-plus"></i> Créer un Compte</a>
                        </li>

                    <?php } ?>


                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

</header>