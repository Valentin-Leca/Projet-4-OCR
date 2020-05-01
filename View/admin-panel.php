<?php ob_start(); ?>
<!-- Page Header -->
<header class="masthead" id="masthead-admin" style="background-image: url('img/mountain.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div id="logo"><img src="img/logo_valou_white.png" alt="logo Alaska"/></div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Page d'Administration</h1>
                    <span class="subheading">Ici, vous pouvez gérer vos articles et les commentaires du site.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <h2 class="post-title"><a href="index.php?getCreationChaptersPage">Créer un Chapitre</a></h2>
                <h2 class="post-title"><a href="index.php?getDeleteChaptersPage">Supprimer un Chapitre</a></h2>
                <h2 class="post-title"><a href="">Modifier un Chapitre</a></h2> <!-- suppresion dans cette page  -->
                <h2 class="post-title"><a href="">Modérer les commentaires</a></h2>
            </div>
            <hr>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>