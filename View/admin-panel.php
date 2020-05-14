<?php ob_start(); ?>
<!-- Page Header -->
<header class="masthead" id="masthead-admin" style="background-image: url('img/mountain.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div id="logo"><img src="img/logo_valou_white.png" alt="logo Alaska"/></div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Page d'Administration</h1>
                    <span class="subheading">Ici, vous pouvez gérer vos articles et les commentaires du site.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container bottom-space">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (isset($_SESSION['chapterIsCreate'])) { ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <?php echo $_SESSION['chapterIsCreate'] ?>
            </div>
            <?php } unset($_SESSION['chapterIsCreate']); ?>
            <?php if (isset($_SESSION['chapterIsDelete'])) { ?>
                <div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <?php echo $_SESSION['chapterIsDelete'] ?>
                </div>
            <?php } unset($_SESSION['chapterIsDelete']); ?>
            <?php if (isset($_SESSION['chapterIsUpdate'])) { ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <?php echo $_SESSION['chapterIsUpdate'] ?>
                </div>
            <?php } unset($_SESSION['chapterIsUpdate']); ?>
            <div class="post-preview flex-center">
                <h2 class="post-title"><a href="index.php?getCreationChaptersPage">Créer un Chapitre</a></h2>
                <h2 class="post-title"><a href="index.php?getEditChaptersPage">Modifier un chapitre</a></h2>
                <h2 class="post-title"><a href="index.php?getCommentOnDeletePage">Modérer les commentaires</a></h2>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>