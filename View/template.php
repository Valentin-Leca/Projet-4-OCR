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
    <script src="https://cdn.tiny.cloud/1/w9obw7cf3t030mgngxm3ksirwz0z8ycr6foywyo73vwfq1x4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector: '#mytextarea', height: 450,});</script>

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
                    <a class="nav-link" href="index.php?aPropos">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?listChapters">Liste des Chapitres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?contact">Contact</a>
                </li>
                <?php if (isset($_SESSION['login']) && ($_SESSION['id_admin'] == 1))  { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?adminPanel">Administration</a>
                    </li>
                <?php } if (isset($_SESSION['login'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?disconnect">Déconnexion</a>
                </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?connection">Connexion</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<?= $content ?>

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
