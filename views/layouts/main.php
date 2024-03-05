<?php
/* @var $this \yii\web\View */
/* @var $content string */

\humhub\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= strip_tags($this->pageTitle); ?></title>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php $this->head() ?>
        <?= $this->render('head'); ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <!-- start: first top navigation bar -->
        <div id="topbar-first" class="topbar">
            <div class="container">
                <div class="topbar-brand hidden-xs">
		 <a class="navbar-brand navbar-brand-text" href="/dashboard" id="text-logo">
            		<img class="logo" src="/themes/orca/img/orca_logo_negativ.svg">
            		<p class="text">- Community</p> </a>
                </div>

                <div class="topbar-actions pull-right">
                    <?= \humhub\modules\user\widgets\AccountTopMenu::widget(); ?>
                </div>

                <div class="notifications pull-right">
                    <?= \humhub\widgets\NotificationArea::widget(); ?>
                </div>
            </div>
        </div>
        <!-- end: first top navigation bar -->

        <!-- start: second top navigation bar -->
        <div id="topbar-second" class="topbar">
            <div class="container">
                <ul class="nav" id="top-menu-nav">
                    <!-- load space chooser widget -->
                    <?= \humhub\modules\space\widgets\Chooser::widget(); ?>

                    <!-- load navigation from widget -->
                    <?= \humhub\widgets\TopMenu::widget(); ?>
                </ul>

                <ul class="nav pull-right" id="search-menu-nav">
                    <?= \humhub\widgets\TopMenuRightStack::widget(); ?>
                </ul>
            </div>
        </div>
        <!-- end: second top navigation bar -->

	
        <?= $content; ?>

		
        <?php $this->endBody() ?>

	<div class="modal-footer">
	
        <!-- end: Footer -->
       
       <div class="page-footer">
 
    <footer class="main-footer">
        <hr>

        <div class="content-container" >

            <div class="redirection-links">
                <div class="links">
                    <div class="flexbox-content">
                        <div><a class="link-styles" href="https://orca.nrw/about">Über uns</a></div>
                        <div><a class="link-styles" href="https://orca.nrw/kontakt">Werbematerial</a></div>
                        <div class="inline-links">
                            <div><a class="link-styles inline-style" href="https://orca.nrw/kontakt">Kontakt</a></div>
                            <div><a class="link-styles inline-style" href="https://orca.nrw/datenschutz">Datenschutz</a></div>
                            <div><a class="link-styles inline-style" href="https://orca.nrw/impressum">Impressum</a></div>
                        </div>
                        <div><a class="link-styles" target="_blank" href="https://twitter.com/orcanrw" title="Empfehlen Sie uns weiter">Twitter <b class="fa fa-twitter"></b></a></div>
                    </div>
                </div>
            </div>

            <div class="image-container">
                <div class="flexbox-image1">
                    <img class="Bild-6" alt="Logo der DH NRW" title="Digitale Hochschule NRW" src="/themes/orca/img/Kooperationsvorhaben_DH_NRW.png">
                </div>    
                <div class="flexbox-image2">
                    <p class="foerderung">Gefördert durch:</p>
                    <img class="Bild-7" alt="Logo des Ministeriums für Kultur und Wissenschaft des Landes Nordrhein-Westfalen" title="Ministerium für Kultur und Wissenschaft des Landes Nordrhein-Westfalen" src="/themes/orca/img/nrw_miwf_logo.svg">
                </div>
            </div>
        </div>
    </footer>

</div>
        
    </body>
</html>
<?php $this->endPage() ?>
