<?php ob_start(); ?>
<!-- Page Header -->
<header class="masthead" id="masthead-admin" style="background-image: url('img/mountain.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div id="logo"><img src="img/logo_valou_white.png" alt="logo Alaska"/></div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Supprimer un commentaire</h1>
                    <!-- <span class="subheading"></span> -->
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<?php if (empty($reportedComments)) { ?>
<p>Vous n'avez pas de commentaires signalés pour le moment !</p>
<?php } else { ?>
<?php foreach($reportedComments as $comment) { ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="">
                        <h2 class="post-title">
                            <?php echo htmlspecialchars($comment['author_comment']); ?>
                        </h2>
                        <p class="post-subtitle">
                            <?php echo htmlspecialchars($comment['content_comment']); ?>
                        </p>
                    </a>
                    <div class="clearfix">
                        <button class="btn btn-primary delete float-left">&rarr; Supprimer le Commentaire</button>
                        <a class="btn btn-primary delete-confirm float-left" href="index.php?deleteComment&id=<?php echo $comment['id']; ?>">&rarr; Confirmer la Suppression ?</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
<?php }} ?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
