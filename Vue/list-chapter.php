<?php ob_start(); ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('../img/livre.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div id="logo"><img src="../img/logo_valou_white.png"/></div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>Liste des chapitres</h1>
                    <span class="subheading">Retrouvez les ci-dessous.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <?php require_once('../Modèle/request-sql-list-chapter.php');
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
</article>
<hr>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>