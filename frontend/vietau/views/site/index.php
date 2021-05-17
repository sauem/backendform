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
<!-- Services Section -->
<?php if (!empty($categories)) {
    ?>
    <div class="services-section">
        <div class="auto-container">
            <div class="sec-title">
                <h2><?= Yii::t('app', 'category_support') ?></h2>
            </div>
            <div class="inner-container">
                <div class="row g-0">
                    <?php foreach ($categories as $category) { ?>
                        <div class="service-block col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon ti-blackboard"></span>
                                </div>
                                <h5>
                                    <a href="<?= HelperFunction::Link(ARCHIVE, $category->slug) ?>"><?= $category->name ?></a>
                                </h5>
                                <div class="text">
                                    <?= $category->description ?>
                                </div>
                                <a class="read-more" href="<?= HelperFunction::Link(ARCHIVE, $category->slug) ?>">
                                    <?= Yii::t('app', 'detail') ?>
                                    <span class="ti-angle-right"></span>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php
} ?>

<!-- End Services Section -->


<!-- About Section -->
<div class="about-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row align-items-center clearfix">
                <!-- Image Column -->
                <div class="image-column col-lg-6">
                    <div class="about-image">
                        <div class="about-inner-image">
                            <img src="<?= HelperFunction::setting('about-image', true) ? HelperFunction::setting('about-image', true) : '/vietau/images/about/home-about.png' ?>"
                                 alt="about">
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
                    <div class="about-column">
                        <div class="sec-title">
                            <h2><?= Yii::t('app','mission')?></h2>
                        </div>
                        <div class="text">
                            <?= HelperFunction::setting('about_us') ?>
                        </div>
                        <div class="signature">CEO <span>Viet Au</span></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End About Section -->

<!-- Project Section -->
<div class="testimonial-section style-two">
    <div class="auto-container">
        <div class="inner-container">

            <!-- Sec Title -->
            <div class="sec-title">
                <h2><?= Yii::t('app','core_value')?></h2>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote icofont-quote-right"></div>
                        <div class="author">Gắn kết<span></span></div>
                        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna
                            akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote icofont-quote-right"></div>
                        <div class="author">Trách nhiệm <span>/ Director at Spotify</span></div>
                        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna
                            akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote icofont-quote-right"></div>
                        <div class="author">Kết nối <span>/ Director at Chobham Manor</span></div>
                        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna
                            akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote icofont-quote-right"></div>
                        <div class="author">Tiếp cận <span>/ Director at Spotify</span></div>
                        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino at magna
                            akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- End Project Section -->

<!-- Reputation Section Two -->
<div class="reputation-section-two style-two">
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
                        <h2><?= Yii::t('app','schedule') ?></h2>
                    </div>
                    <div class="blocks-outer">

                        <!-- Reputation Block -->
                        <?= HelperFunction::setting('about_us',true) ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Reputation Section -->

<!-- Blog Section -->
<?php if (isset($articles) && !empty($articles)) { ?>
    <div class="blog-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title"><?= Yii::t('app','news')?></div>
                <h2><?= Yii::t('app','international_market')?></h2>
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
