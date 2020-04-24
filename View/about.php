<?php ob_start(); ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/biblio.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div id="logo"><img src="img/logo_valou_white.png" alt="logo Alaska"/></div>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>À propos</h1>
                    <span class="subheading">Voici qui je suis.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates
                odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus
                consectetur?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque
                architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in
                officia voluptas voluptatibus, minus!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex
                itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit
                tempora!</p>
        </div>
    </div>
</div>

<hr>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
