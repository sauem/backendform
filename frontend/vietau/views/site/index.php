<?php

/* @var $this yii\web\View */

use common\helper\HelperFunction;
use yii\widgets\ActiveForm;

$this->title = HelperFunction::getLanguage() == 'vi' ?
    HelperFunction::setting('site_name') :
    HelperFunction::setting('site_name_en');
Yii::$app->params['footer_type'] = 'light';
?>

<!-- Services Section -->
<?= $this->render('../parts/slider', [
    'sliders' => $sliders
]) ?>

<!-- End Services Section -->

<div class="about-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row align-items-center clearfix">
                <!-- Image Column -->
                <div class="image-column col-lg-6">
                    <div class="about-image">
                        <div class="about-inner-image">
                            <img src="/vietau/images/banner.png"
                                 alt="about">
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
                    <div class="about-column">
                        <div class="sec-title">
                            <h2><?= Yii::t('app', 'who_we_are') ?></h2>
                        </div>
                        <div class="text">
                            <p><?= nl2br(HelperFunction::setting('about_us', true)) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="reputation-section-two style-two">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Content Column -->
            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                <div class="sec-title">
                    <h2><?= Yii::t('app', 'event') ?></h2>
                </div>
                <div class="blocks-outer">
                    <p><?= nl2br(HelperFunction::setting('event_desc', true)) ?></p>
                    <!-- Reputation Block -->
                </div>
            </div>

            <!-- Form Column -->
            <div class="form-column col-lg-5 col-md-12 col-sm-12">
                <img src="/vietau/images/event.png" width="100%" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- Reputation Section Two -->
<div class="reputation-section-two py-4 style-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Form Column -->
            <div class="form-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="form-boxed">
                        <h5>free consulation</h5>

                        <div class="consult-form">
                            <?php $form = ActiveForm::begin([
                                'id' => 'request-form'
                            ]) ?>

                            <?= $form->field($contactForm, 'name')
                                ->textInput([
                                    'class' => '',
                                ])->label(Yii::t('app', 'fullname')) ?>
                            <?= $form->field($contactForm, 'type')
                                ->hiddenInput(['value' => 'contact'])->label(false) ?>

                            <?= $form->field($contactForm, 'email')
                                ->textInput([
                                    'class' => '',
                                ])->label('Email') ?>
                            <?= $form->field($contactForm, 'phone')
                                ->textInput([
                                    'class' => '',
                                ])->label(Yii::t('app', 'phone')) ?>
                            <!--Form Group-->
                            <?= $form->field($contactForm, 'message')
                                ->textarea([
                                    'class' => '',
                                ])->label(Yii::t('app', 'message')) ?>
                            <div class="form-group">
                                <button class="theme-btn btn-request-form btn-style-one" type="submit"
                                        name="submit-form"><span
                                            class="txt">
                                        <?= Yii::t('app', 'submit_req') ?>
                                    </span></button>
                            </div>
                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2><?= Yii::t('app', 'schedule') ?></h2>
                    </div>
                    <div class="blocks-outer">
                        <!-- Reputation Block -->
                        <?= nl2br(HelperFunction::setting('schedule', true)) ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Reputation Section -->

<!-- Blog Section -->
<?php if (isset($articles) && !empty($articles)) { ?>
    <div class="blog-section py-5">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2><?= Yii::t('app', 'news') ?></h2>
            </div>
            <div class="inner-container">
                <div class="row">
                    <?php foreach ($articles as $article) {
                        ?>
                        <div class="col-md-4">
                            <div class="blog-index news-block-three">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="<?= HelperFunction::Link(BLOG, $article->slug, $article->archive->slug) ?>">
                                            <img width="100%" src="<?= $article->avatar ?>" class="img-fluid"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-text">
                                    <h1 class="title">
                                        <a href="<?= HelperFunction::Link(BLOG, $article->slug, $article->archive->slug) ?>">
                                            <?= $article->name ?>
                                        </a>
                                    </h1>
                                    <p class="desc"> <?= $article->excerpt ?></p>
                                    <small><i class="icofont-calendar"></i> <?= date('d/m/Y', $article->created_at) ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?= $this->render('../parts/logo', [
    'logos' => $logos
]) ?>
