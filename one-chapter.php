<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Le Blog De Jean Forteroche</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico"/>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container" id="nav-bar-cont">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="post.php">Liste des Chapitres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="connection.php">Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<?php require_once('request-sql-one-chapter.php');
while ($donnees = $req->fetch()) { ?>
<header class="masthead" style="background-image: url('img/livre.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div id="logo"><img src="img/logo_valou_white.png"/></div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1><?php echo $donnees['title']; ?></h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p><?php echo $donnees['content'] ?></p>
                <p class="post-meta"><span class="caption text-muted">Posté par : <a href="about.php"><?php echo $donnees['author']; ?></a>
                    le <?php echo $donnees['date_creation_fr']; ?></span></p>
                <!--
                <h2 class="section-heading"></h2>
                <a href="#">
                    <img class="img-fluid" src="img/post-sample-image.jpg" alt="">
                </a>
                <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>

                <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year
                    mission:
                    to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no
                    man
                    has gone before.</p>

                <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a
                    fundamental
                    truth to our nature, Man must explore, and this is exploration at its greatest.</p> --!>
            </div>
        </div>
    </div>
    <?php }
    $req->closeCursor() ?>
</article>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="https://twitter.com/explore" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://fr-fr.facebook.com/" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/?hl=fr" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>

</body>

</html>
