<?php

use common\helper\HelperFunction;

Yii::$app->params['header_style'] = true;
?>
<?= $this->render('../parts/page-title', [
    'title' => Yii::t('app', 'partners'),
    'description' => ''
]) ?>

<?php if (!empty($partners)) { ?>
    <div class="experts-section p-0">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2><?= Yii::t('app', 'partners') ?></span></h2>
                    </div>
                </div>
            </div>
            <div class="row clearfix">

                <?php if (!empty($partners)) {
                    foreach ($partners as $partner) {
                        ?>
                        <div class="team-block col-md-4 col-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <a href="#"><img src="<?= $partner->avatar ?>" alt=""/></a>
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a target="_blank" href="<?= $partner->twitter ?>"
                                               class="icofont-twitter"></a>
                                        </li>
                                        <li><a target="_blank" href="<?= $partner->facebook ?>"
                                               class="icofont-facebook"></a>
                                        </li>
                                        <li><a target="_blank" href="<?= $partner->linkedin ?>"
                                               class="icofont-linkedin"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lower-box mt-0">
                                    <h5><a href="#"><?= $partner->name ?></a></h5>
                                    <div class="designation"><?= $partner->description ?></div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } ?>
            </div>
        </div>
    </div>
<?php } ?>
<?php if (!empty($products)) { ?>
    <div class="services-section p-0">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2><?= Yii::t('app', 'product') ?></span></h2>
                    </div>
                </div>
            </div>
            <div class="inner-container">
                <div class="row g-0">
                    <?php foreach ($products as $model) {
                        ?>
                        <div class="service-block col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box p-3">
                                <div class="icon-box">
                                    <?php if ($model->avatar) { ?>
                                        <img class="img-fluid" src="<?= $model->avatar ?>"/>
                                    <?php } else { ?>
                                        <span class="icon ti-stats-up"></span>
                                    <?php } ?>
                                </div>
                                <h5>
                                    <a href="<?= HelperFunction::Link(PRODUCT, $model->slug, $model->defaultArchive->slug) ?>">
                                        <?= $model->name ?>
                                    </a>
                                </h5>
                                <div class="text text-3"> <?= $model->excerpt ?></div>
                                <a class="read-more"
                                   href="<?= HelperFunction::Link(PRODUCT, $model->slug, $model->defaultArchive->slug) ?>">
                                    <?= Yii::t('app', 'detail') ?>
                                    <span class="ti-angle-right"></span></a>
                            </div>
                        </div>
                        <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
