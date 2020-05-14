<?php ob_start(); ?>
    <!-- Page Header -->
<?php while ($dataChapterModel = $data->fetch()) { ?>
    <header class="masthead" style="background-image: url('img/livre.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div id="logo"><img src="img/logo_valou_white.png" alt="logo Alaska"/></div>
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1><?php echo htmlspecialchars($dataChapterModel['title']); ?></h1>
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
                <p><?php echo $dataChapterModel['content']; ?></p>
                <p class="post-meta"><span class="caption text-muted">Posté par : <a href="index.php?aPropos">
                    <?php echo htmlspecialchars($dataChapterModel['author']); ?></a>
                    le <?php echo htmlspecialchars($dataChapterModel['date_creation_fr']); ?></span></p>
                    <?php }$data->closeCursor(); ?>
                    <hr>
                    <h3 class="section-heading">Commentaires</h3>
                    <?php if (!isset($_SESSION['login'])) { ?>
                    <p class="subheading">Vous devez être connecté pour laisser un commentaire &rarr; <a
                    href="index.php?connection"><span id="underline_3">Connexion</span></a></p> <?php } ?>
                    <?php if (isset($_SESSION['login'])) { ?>
                <form method="post" action="index.php?postComment&id=<?php echo htmlspecialchars($_GET['id']); ?>">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                        <label>Commentaire</label>
                        <textarea type="text" class="form-control" placeholder="Ecrivez votre avis ici" required
                          data-validation-required-message="Veuillez indiquer votre identifiant."
                          name="contentComment"></textarea>
                        <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary post-comment-btn"
                            id="sendMessageButton">Poster un commentaire
                        </button>
                    </div>
                </form> <?php } ?>
                    <?php while ($dataCommentModel = $comment->fetch()) { ?><p>
                    <span id="author-comment"><?php echo htmlspecialchars($dataCommentModel['author_comment']); ?></span>
                    <span class="caption text-muted" id="author-comment-span">
                        le <?php echo htmlspecialchars($dataCommentModel['date_comment_fr']); ?>
                    </span>
                    <?php if (isset($_SESSION['login'])) { ?>
                    <a class="btn btn-primary report" href="index.php?reportComment&id=
                    <?php echo htmlspecialchars($dataCommentModel['id']); ?>">Signaler</a><?php } ?></p>
                    <p><?php echo htmlspecialchars($dataCommentModel['content_comment']); ?></p>
                    <hr>
                    <?php } $comment->closeCursor(); ?>
            </div>
        </div>
    </div>
</article>
<?php $content = ob_get_clean(); ?>
<?php require_once('template.php'); ?>