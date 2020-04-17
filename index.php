<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blog">
    <meta name="author" content="Jean Forteroche">

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
<header class="masthead" style="background-image: url('img/picture-of-me.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div id="logo"><img src="img/logo_valou_white.png"/></div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Jean Forteroche</h1>
                    <span class="subheading">Bienvenue sur mon blog, cliquez <a href="about.php"><span id="underline">ici</span></a> pour en savoir plus à mon sujet.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<?php require_once('request-sql-home.php');
while ($donnees = $req->fetch()) { ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="one-chapter.php?id=<?php echo $donnees['id']; ?>">
                        <h2 class="post-title">
                            <?php echo $donnees['title']; ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo $donnees['content_extrait']; ?>... <span id="underline_2">voir la suite</span>
                        </h3>
                    </a>
                    <p class="post-meta">Posté par
                        <a href="about.php"><?php echo $donnees['author']; ?></a>
                        le <?php echo $donnees['date_creation_fr']; ?></p>
                </div>
                <hr>
            </div>
        </div>
    </div>
<?php }
$req->closeCursor() ?>
<!-- Pager -->
<div class="clearfix">
    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
</div>


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
                <p><?php if (isset($_SESSION['id']) AND isset($_SESSION['name'])) {
                        echo 'Bonjour ' . $_SESSION['name'];
                    } ?></p>
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
