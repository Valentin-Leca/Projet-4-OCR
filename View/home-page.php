<?php ob_start(); ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/picture-of-me.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div id="logo"><img src="img/logo_valou_white.png" alt="logo Alaska"/></div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1 id="author-name">Jean Forteroche</h1>
                    <span class="subheading">Bienvenue sur mon blog, cliquez <a href="index.php?aPropos">
                            <span id="underline">ici</span></a> pour en savoir plus à mon sujet.</span>
                        <h3 id="user-name"><?php if (isset($_SESSION['login'])) {
                            echo "Bienvenue " . $_SESSION['login']; } ?></h3>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<?php
while ($dataChaptersModel = $data->fetch()) { ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="index.php?oneChapter&id=<?php echo $dataChaptersModel['id']; ?>">
                        <h2 class="post-title">
                            <?php echo $dataChaptersModel['title']; ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo $dataChaptersModel['content_extrait']; ?>... <span
                                    id="underline_2">voir la suite</span>
                        </h3>
                    </a>
                    <p class="post-meta">Posté par
                        <a href="index.php?aPropos"><?php echo $dataChaptersModel['author']; ?></a>
                        le <?php echo $dataChaptersModel['date_creation_fr']; ?></p>
                </div>
                <hr>
            </div>
        </div>
    </div>
<?php }
$data->closeCursor() ?>
<!-- Pager -->
<div class="clearfix">
    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
</div>
<hr>
<?php $content = ob_get_clean(); ?>
<?php require_once('template.php'); ?>
