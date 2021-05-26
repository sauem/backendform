<?php

/* @var $this \yii\web\View */

/* @var $content string */

use common\helper\HelperFunction;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use janami\assets\AppAsset;
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
    <meta property="og:title" content="<?= $this->title ?>"/>
    <meta property="og:url" content="<?= \Yii::$app->homeUrl; ?>"/>
    <meta property="og:site_name" content="SITE_NAME"/>
    <link rel="shortcut icon" href="<?= HelperFunction::Favicon() ?>" type="image/x-icon">
    <link rel="icon" href="<?= HelperFunction::Favicon() ?>" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= HelperFunction::Favicon() ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= HelperFunction::Favicon() ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= HelperFunction::Favicon() ?>">
    <link rel="apple-touch-icon" href="<?= HelperFunction::Favicon() ?> ">
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="<?= HelperFunction::getLogo('header') ?>"/>
    <meta property="og:description" content=""/>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "<?= $this->title ?>",
            "url": "<?= \Yii::$app->homeUrl; ?>"
        }



    </script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="loader-wrapper">
    <div id="loading">
        <div class="cssload-loader">
            <div class="fancy-spinner">
                <div class="ring"></div>
                <div class="ring"></div>
                <div class="dot"></div>
            </div>
        </div>
    </div>
</div>


<div id="page" class="page">
    <?= $this->render('../parts/header') ?>
    <?= $content ?>
    <?= $this->render('../parts/footer') ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
