<?php ob_start(); ?>
<!-- Page Header -->
<?php require_once('../Modèle/request-sql-one-chapter.php');
while ($donnees = $req->fetch()) { ?>
<header class="masthead" style="background-image: url('../img/livre.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div id="logo"><img src="../img/logo_valou_white.png"/></div>
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
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>