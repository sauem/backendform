<?php

/* @var $this yii\web\View */

use common\helper\HelperFunction;

$this->title = HelperFunction::getLanguage() == 'vi' ?
    HelperFunction::setting('site_name') :
    HelperFunction::setting('site_name_en');
Yii::$app->params['footer_type'] = 'light';
?>

<!-- Services Section -->
<?= $this->render('../parts/slider', [
    'sliders' => $sliders
]) ?>

<section class="banner-layout1 mt-50 pt-90 pb-90 bg-overlay bg-overlay-primary">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-inner d-flex flex-column justify-content-between">
                <div>
                    <div class="heading heading-light">
                        <h3 class="heading__title mb-30"><?= Yii::t('app', 'usvn_info') ?></h3>
                        <p class="heading__desc">
                            <strong><?= Yii::t('app', 'address') ?> :
                                <?= HelperFunction::setting('address_1', true) ?>
                                <br>
                                <?= HelperFunction::setting('address_2', true) ?>
                            </strong>
                        </p>

                        <p class="heading__desc">
                            <strong><?= Yii::t('app', 'email') ?> :
                                <a class="text-white"
                                   href="mailto:<?= HelperFunction::setting('email') ?>">
                                    <?= HelperFunction::setting('email') ?></a>
                            </strong>
                        </p>
                        <p class="heading__desc">
                            <strong><?= Yii::t('app', 'hotline') ?> :
                                <a class="text-white" href="tel:<?= HelperFunction::setting('hotline_1') ?>">
                                    <?= HelperFunction::setting('hotline_1') ?>
                                </a>
                                <br>
                                <a class="text-white" href="tel:<?= HelperFunction::setting('hotline_2') ?>">
                                    <?= HelperFunction::setting('hotline_2') ?>
                                </a>
                            </strong>
                        </p>
                    </div><!-- /.heading -->
                    <div class="d-flex align-items-center mb-40">
                        <a href="#" class="btn btn__white btn__icon mr-30">
                            <span><?= \Yii::t('app', 'contact') ?></span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        <a href="#" class="btn btn__white btn__bordered btn__icon mr-30">
                            <span><?= \Yii::t('app', 'call_hotline') ?></span>
                            <i class="icon-phone"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-xl-6 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <div class="contact-panel">
                    <?= $this->render('../parts/form-request', [
                        'model' => $contactForm
                    ]) ?>
                </div>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
