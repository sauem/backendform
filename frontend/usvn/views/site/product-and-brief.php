<?php

use yii\widgets\ListView;

$this->title = 'Products and brief';

?>

<?= $this->render('../parts/page-title', [
    'title' => $this->title,
    'description' => ''
]) ?>
<section class="portfolio-grid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="heading mb-50">
                    <div class="d-flex align-items-center">
                        <div class="divider divider-primary mr-30"></div>
                        <h2 class="heading__subtitle mb-0">
                            <?= Yii::t('app', 'products') ?>
                        </h2>
                    </div>
                    <h3 class="heading__title mb-0">
                        <?= Yii::t('app', 'product_items') ?>
                    </h3>
                </div>
            </div><!-- /.col-lg-6 -->
        </div>

        <div id="filtered-items-wrap">

            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '../parts/_item_product',
                'emptyText' => 'No results.',
                'options' => [
                    'class' => 'row'
                ],
                'itemOptions' => [
                    'class' => 'col-sm-6 col-md-4',
                ],
                'summary' => false,
                'pager' => [
                    'firstPageLabel' => false,
                    'lastPageLabel' => false,
                    'prevPageLabel' => '<i class="icon-arrow-left"></i>',
                    'nextPageLabel' => '<i class="icon-arrow-right"></i>',
                    'maxButtonCount' => 3,
                    'disabledPageCssClass' => 'd-none',
                    'activePageCssClass' => 'current'
                ],
            ])
            ?>
        </div>
    </div>
</section>
<section class="banner-layout1 pt-90 pb-90 bg-overlay bg-overlay-primary">
    <div class="bg-img"><img src="/usvn/images/banners/5.jpg" alt="background"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-inner d-flex flex-column justify-content-between">
                <div>
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

