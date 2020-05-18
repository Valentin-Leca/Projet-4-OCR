<?php ob_start(); ?>
    <!-- Page Header -->
    <header class="masthead" id="masthead-admin" style="background-image: url('img/mountain.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div id="logo"><img src="img/logo_valou_white.png" alt="logo Alaska"/></div>
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Modifier ou supprimer un chapitre</h1>
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
                            echo substr($contentExtrait, 0, 200); ?>... <span class="see-more">Voir la suite</span>
                        </p>
                    </a>
                    <div class="clearfix">
                        <button class="btn btn-primary delete float-left">&rarr; Supprimer le Chapitre</button>
                        <a class="btn btn-primary delete-confirm float-left"
                           href="index.php?deleteChapters&id=<?php echo htmlspecialchars($dataChaptersModel['id']); ?>">&rarr;
                            Confirmer la Suppression ?</a>
                        <a class="btn btn-primary float-left"
                           href="index.php?getUpdateChaptersPage&id=<?php echo htmlspecialchars($dataChaptersModel['id']); ?>">&rarr;
                            Modifier Un Chapitre</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
<?php }
$data->closeCursor() ?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>