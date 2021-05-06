<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\vietau\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?= $this->title?>"/>
    <meta property="og:url" content="<?= \Yii::$app->homeUrl;?>"/>
    <meta property="og:site_name" content="SITE_NAME"/>
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#"/>
    <meta property="og:description" content=""/>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "<?= $this->title?>",
            "url": "<?= \Yii::$app->homeUrl;?>"
        }
    </script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="page-wrapper">

    <?= $this->render('../parts/header') ?>

    <?= $content ?>
    <?= $this->render('../parts/footer') ?>

    <div class="search-popup">
        <button class="close-search style-two"><span class="icofont-brand-nexus"></span></button>
        <button class="close-search"><span class="icofont-arrow-up"></span></button>
        <form method="post" action="https://htmldemo.hasthemes.com/consultix/consultix/blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>

    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
