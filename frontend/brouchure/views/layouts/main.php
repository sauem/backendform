<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use frontend\brouchure\assets\AppAsset;

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
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#"/>
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

<div class="page">
    <div id="preloader" class="blobs-wrapper">
        <div class="ttm-bgcolor-skincolor loader-blob"></div>
    </div>
    <?= $this->render('../parts/header') ?>
    <div class="site-main">
        <?= $content ?>
    </div>
    <?= $this->render('../parts/footer') ?>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
