<?php ob_start(); ?>
<!-- Page Header -->
<header class="masthead" id="masthead-admin" style="background-image: url('img/mountain.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div id="logo"><img src="img/logo_valou_white.png" alt="logo Alaska"/></div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Modifier un chapitre</h1>
                    <!-- <span class="subheading"></span> -->
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<?php while ($chaptersData = $data->fetch()) { ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form method="post" action="index.php?updateChapter&id=<?php echo htmlspecialchars($chaptersData['id']); ?>">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Titre</label>
                        <input type="text" class="form-control" placeholder="Titre Du chapitre" required value="<?php echo htmlspecialchars($chaptersData['title']) ; ?>"
                               data-validation-required-message="Veuillez ajouter un titre au chapitre" name="title">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Contenue du Chapitre</label>
                        <textarea id="mytextarea" name="content" required><?php echo htmlspecialchars($chaptersData['content']); ?></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Poster Le Chapitre</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>


