<?php

use yii\widgets\ListView;
use common\helper\HelperFunction;

$this->title = Yii::t('app', 'order');

?>

<?= $this->render('../parts/page-title', [
    'title' => $this->title,
    'description' => ''
]) ?>


<section class="banner-layout1 pt-90 pb-90 bg-overlay bg-overlay-primary">
    <div class="bg-img"><img src="/usvn/images/banners/5.jpg" alt="background"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-inner d-flex flex-column justify-content-between">
                <div>
                    <video width="100%" height="auto" controls>
                        <source src="/usvn/images/logo-clip.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="heading heading-light">
                        <h3 class="heading__title mb-30"><?= Yii::t('app', 'usvn_info') ?></h3>
                        <p class="heading__desc">
                            <strong><?= Yii::t('app', 'address') ?> :
                                <?= HelperFunction::setting('address_1', true) ?>

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
</section><!-- /.Banner layout 1 -->

<?php if (isset($categories) && !empty($categories)) { ?>

    <section class="blog-grid pb-50">
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
