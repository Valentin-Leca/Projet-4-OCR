<?php ob_start(); ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('../img/background.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div id="logo"><img src="../img/logo_valou_white.png"/></div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Se connecter</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>En vous connectant, vous pourrez me laisser vos commentaires sur les derniers chapitres et ainsi me dire
                ce que vous en pensez !</p>
            <div id="succes">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <strong>Votre compte a été créé avec succès. Vous pouvez vous connecter.</strong>
                </div>
            </div>
            <form name="connection" method="post" action="../Modèle/request-sql-connection-account.php">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Login</label>
                        <input type="text" class="form-control" placeholder="Identifiant" id="name" required
                               data-validation-required-message="Veuillez indiquer votre identifiant." name="login">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="Mot de passe" id="first_name" required
                               data-validation-required-message="Veuillez indiquer votre mot de passe." name="password">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>