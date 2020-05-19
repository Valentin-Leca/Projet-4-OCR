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
                            <span id="underline">ici</span></a> pour en savoir plus à mon sujet.
                    </span>
                        <?php if (isset($_SESSION['login'])) { ?>
                        <h3 id="user-name">Bienvenue <?php echo htmlspecialchars($_SESSION['login']); } ?>
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
                    <a href="index.php?oneChapter&id=<?php echo htmlspecialchars($dataChaptersModel['id']); ?>">
                        <h2 class="post-title">
                            <?php echo htmlspecialchars($dataChaptersModel['title']); ?>
                        </h2>
                        <p class="post-subtitle">
                            <?php $contentExtrait = $dataChaptersModel['content'];
                            echo substr($contentExtrait, 0, 90); ?><br/><span class="see-more">Voir la suite ...</span>
                        </p>
                    </a>
                    <p class="post-meta">Posté par
                        <a href="index.php?aPropos"><?php echo htmlspecialchars($dataChaptersModel['author']); ?></a>
                        le <?php echo htmlspecialchars($dataChaptersModel['date_creation_fr']); ?></p>
                </div>
                <hr>
            </div>
        </div>
    </div>
<?php }
$data->closeCursor() ?>
<!-- Pager -->
<div class="clearfix">
    <a class="btn btn-primary float-right" href="index.php?listChapters">Anciens Chapitres &rarr;</a>
</div>
<hr>
<?php $content = ob_get_clean(); ?>
<?php require_once('template.php'); ?>
