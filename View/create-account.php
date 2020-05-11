<?php ob_start(); ?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/background.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div id="logo"><img src="img/logo_valou_white.png" alt="Logo Alaska"/></div>
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Création du Compte</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>En vous créant un compte, vous pourrez me laisser vos commentaires sur les derniers chapitres et
                    ainsi me dire
                    ce que vous en pensez !</p>
                <?php if (isset($_SESSION['badLogin'])) { ?>
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            <?php echo $_SESSION['badLogin'] ?>
                        </div>
                <?php } unset($_SESSION['badLogin']); ?>
                <?php if (isset($_SESSION['badPassword'])) { ?>
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            <?php echo $_SESSION['badPassword'] ?>
                        </div>
                <?php } unset($_SESSION['badPassword']); ?>
                <form method="post" action="index.php?createAccount">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Nom" id="name" required
                                   data-validation-required-message="Veuillez indiquer votre nom." name="name">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="Prénom" id="first_name" required
                                   data-validation-required-message="Veuillez indiquer votre prénom." name="firstName">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Adresse Mail" id="email" required
                                   data-validation-required-message="Veuillez indiquer une adresse mail valide."
                                   name="mailAdress">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Login (connection ID)</label>
                            <input type="text" class="form-control" placeholder="Pseudo (identifiant de connexion)"
                                   id="login" required
                                   data-validation-required-message="Veuillez indiquer votre pseudo." name="login">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Mot de passe" id="password"
                                   required
                                   data-validation-required-message="Veuillez indiquer votre mot de passe."
                                   name="password">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Confirmation du mot de passe"
                                   id="passwordBis" required
                                   data-validation-required-message="Veuillez confirmer votre mot de passe."
                                   name="passwordBis">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Créer un compte</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>