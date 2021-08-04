<?php

/* @var $this yii\web\View */

use common\helper\HelperFunction;

$this->title = HelperFunction::getLanguage() == 'vi' ?
    HelperFunction::setting('site_name') :
    HelperFunction::setting('site_name_en');
//Yii::$app->params['footer_type'] = 'light';
?>

<!-- Services Section -->
<?= $this->render('../parts/slider', [
    'sliders' => $sliders
]) ?>

<?php if (isset($categories) && !empty($categories)) { ?>

    <section class="blog-grid archive pb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center">
                        <h3 class="heading__title"><?= Yii::t('app', 'products') ?></h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <!-- Blog Item #1 -->
                <?php foreach ($categories as $categorie) {
                    $slug = HelperFunction::Link(PRODUCT, $categorie->slug);
                    ?>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="post-item product-item">
                            <div class="post__img">
                                <a href="<?= $slug ?>">
                                    <img src="<?= $categorie->avatar ?>" alt="<?= $categorie->name ?>">
                                </a>
                            </div><!-- /.blog-img -->
                            <div class="post__content">
                                <h4 class="post__title">
                                    <a href="<?= $slug ?>"><?= $categorie->name ?></a>
                                </h4>
                                <p class="post__desc text-3">
                                    <?= $categorie->description ?>
                                </p>
                            </div><!-- /.blog-content -->
                        </div><!-- /.post-item -->
                    </div><!-- /.col-lg-4 -->
                <?php } ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
<?php } ?>


<section class="banner-layout5 testimonials py-5 pb-0">
    <div class="bg-img"><img src="usvn/images/backgrounds/map.png" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center"><?= Yii::t('app', 'service_route') ?></h3>
            </div>
            <div class="col-md-6 offset-md-3 col-12">
                <p class="text-white txt-18"><?= HelperFunction::getParams('service_route', '_' . HelperFunction::getLanguage()) ?></p>
            </div>
            <div class="col-12">
                <div class="row counters-wrapper counters-light">

                </div>
            </div>
        </div>
        <div class="cta d-flex align-items-center">
            <div class="cta__item w-100 d-flex justify-content-center align-items-center">

                <div class="cta__content text-center">
                    <h4 class="cta__title"><?= Yii::t('app', 'remote_support') ?></h4>
                    <p class="cta__desc mb-0"><?= Yii::t('app', 'remote_support_txt') ?></p>
                    <a href="tel:<?= HelperFunction::setting('hotline_1') ?>"
                       class="btn btn__white mt-2 btn-sm">
                        <span><?= Yii::t('app', 'hotline') ?></span>
                        <i class="icon-phone"></i>
                    </a>
                </div><!-- /.cta__content -->
            </div><!-- /.cta__item -->
            <a class="popup-video" href="/usvn/images/logo-clip.mp4">
                <div class="or-seperator">
                    <i class="fa fa-play"></i>
                </div>
            </a>
            <div class="cta__item w-100 d-flex justify-content-center align-items-center">
                <div class="cta__content text-center">
                    <h4 class="cta__title"><?= Yii::t('app', 'contact') ?></h4>
                    <p class="cta__desc mb-0"><?= Yii::t('app', 'contact_txt') ?></p>
                    <a href="/<?= CONTACT ?>"
                       class="btn btn__white mt-2 btn-sm">
                        <span><?= Yii::t('app', 'detail') ?></span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.cta__content -->

            </div><!-- /.cta__item -->
        </div><!-- /.cta -->
    </div>
</section>
