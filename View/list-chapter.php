<?php ob_start(); ?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/livre.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div id="logo"><img src="img/logo_valou_white.png" alt="logo Alaska"/></div>
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Liste des chapitres</h1>
                        <span class="subheading">Retrouvez les ci-dessous.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <?php while ($dataChaptersModel = $data->fetch()) { ?>
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
                                    echo substr($contentExtrait, 0, 90); ?><br />
                                    <span id="see-more">Voir la suite ...</span>
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
    </article>
    <hr>
<?php $content = ob_get_clean(); ?>
<?php require_once('template.php'); ?>