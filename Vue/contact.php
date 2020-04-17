<?php ob_start(); ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('../img/phone.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div id="logo"><img src="../img/logo_valou_white.png"/></div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Me Contacter</h1>
                    <span class="subheading">Vous avez une question ? J'ai la réponse.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>Vous souhaitez me contacter ? Remplissez le formulaire ci-dessous pour m'envoyer un message et je vous
                répondrai dans les plus brefs délais!</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Nom" id="name" required
                               data-validation-required-message="Veuillez indiquer votre nom.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Prénom" id="first_name" required
                               data-validation-required-message="Veuillez indiquer votre prénom.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Adresse Mail" id="email" required
                               data-validation-required-message="Veuillez indiquer une adresse mail valide.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Phone Number</label>
                        <input type="tel" class="form-control" placeholder="N° de téléphone" id="phone" required
                               data-validation-required-message="Veuillez indiquer votre n° de téléphone.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Message</label>
                        <textarea rows="5" class="form-control" placeholder="Message" id="message" required
                                  data-validation-required-message="Veuillez entrer votre message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>