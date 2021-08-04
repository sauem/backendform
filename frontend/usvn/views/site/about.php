<?php

use common\helper\HelperFunction;

$this->title = Yii::t('app', 'about_us');
$this->params['header_type'] = 'light';
?>

<section class="page-title about page-title-layout1 text-center bg-overlay bg-overlay-gradient bg-parallax">
    <div class="bg-img"><img src="/usvn/images/page-titles/1.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
                <h1 class="pagetitle__heading"><?= $this->title; ?></h1>
                <p class="pagetitle__desc"></p>
                <nav>
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/"><?= Yii::t('app', 'home') ?></a></li>
                        <li class="breadcrumb-item"><?= Yii::t('app', 'about') ?></li>
                    </ol>
                </nav>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
        <?php if (isset($abouts) && !empty($abouts)) { ?>

            <nav class="nav about-tab nav-tabs justify-content-center">
                <?php foreach ($abouts as $about) { ?>
                    <a href="<?= HelperFunction::Link(ABOUT_US, $about->slug) ?>"
                       class="nav__link <?= $activeSlug == $about->slug ? 'active' : '' ?>">
                        <?= $about->name ?>
                    </a>
                <?php } ?>

            </nav>
        <?php } ?>


    </div><!-- /.container -->
</section><!-- /.page-title -->

<section class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="mt-4"><?= $model->name ?></h4>
                <hr>
            </div>
            <div class="col-12">
                <?php if (in_array($model->slug, ['lien-he', 'contact-us', 'contact'])) {
                    ?>
                    <iframe src="<?= HelperFunction::setting('map_iframe') ?>" width="100%" height="450"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <?php
                } else { ?>
                    <div class="about-banner">
                        <div class="banner-title">
                            <img width="100%" src="<?= $model->avatar ?>" class="img-fluid"/>
                        </div>
                        <?php if ($model->excerpt) { ?>
                            <div class="banner-description">
                                <?= $model->excerpt ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-12 mt-5 pt-5">
                <?= $model->content ?>
            </div>
        </div>
    </div>
</section>
