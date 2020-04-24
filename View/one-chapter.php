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
                    <h1><?php echo $dataChapterModel['title']; ?></h1>
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
                <p class="post-meta"><span class="caption text-muted">Posté par : <a href="index.php?aPropos"><?php echo $dataChapterModel['author']; ?></a>
                    le <?php echo $dataChapterModel['date_creation_fr']; ?></span></p>
                    <?php } $data->closeCursor(); ?>
                    <hr>

                <h3 class="section-heading">Commentaires</h3>
                <?php while ($dataCommentModel = $comment->fetch()) { ?><p><span id="author-comment"><?php echo $dataCommentModel['author_comment']; ?></span>
                <span class="caption text-muted" id="author-comment-span">le <?php echo $dataCommentModel['date_comment_fr']; ?></span></p>
                    <p><?php echo $dataCommentModel['content_comment']; ?></p>
                    <hr>
                <?php } $comment->closeCursor(); ?>
                <!--<a href="#">   $dataCommentModel['content'];
                    <img class="img-fluid" src="../img/post-sample-image.jpg" alt="">
                </a>
                <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>

                <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year
                    mission:
                    to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no
                    man
                    has gone before.</p>

                <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a
                    fundamental
                    truth to our nature, Man must explore, and this is exploration at its greatest.</p> !-->
            </div>
        </div>
    </div>
</article>
<?php $content = ob_get_clean(); ?>
<?php require_once('template.php'); ?>