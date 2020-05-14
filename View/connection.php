<?php ob_start(); ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/background.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div id="logo"><img src="img/logo_valou_white.png" alt="Logo Alaska"/></div>
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
            <p>En vous connectant, vous pourrez me laisser vos commentaires sur
                les derniers chapitres et ainsi me dire ce que vous en pensez !</p>
            <?php if (isset($_SESSION['createAccountSucces'])) { ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <?php echo $_SESSION['createAccountSucces']; ?>
                </div>
            <?php } unset($_SESSION['createAccountSucces']); ?>
            <?php if (isset($_SESSION['errorAtConnection'])) { ?>
                    <div class="alert alert-error">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <?php echo $_SESSION['errorAtConnection']; ?>
                    </div>
            <?php } unset($_SESSION['errorAtConnection']); ?>
            <form  method="post" action="index.php?login">
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
                        <input type="password" class="form-control" placeholder="Mot de passe" id="password" required
                               data-validation-required-message="Veuillez indiquer votre mot de passe." name="password">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Se connecter</button>
                    <p class="subheading">Si vous ne possédez pas de compte, cliquez <a href="index.php?createAccountPage"><span id="underline_3">ici</span></a> pour en créer un !</p>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
<?php $content = ob_get_clean(); ?>
<?php require_once('template.php'); ?>