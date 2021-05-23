<?php

use common\helper\HelperFunction;

Yii::$app->params['header_style'] = true;
?>
<?= $this->render('../parts/page-title', [
    'title' => Yii::t('app', 'members_list'),
    'description' => ''
]) ?>
<?php if (!empty($bods)) { ?>
    <div class="experts-section p-0">
        <div class="auto-container">
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2><?= Yii::t('app', 'organizational_structure') ?></span></h2>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <?php foreach ($bods as $bod) { ?>
                    <div class="team-block col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="#"><img src="<?= $bod->avatar ?>" alt=""/></a>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li><a target="_blank" href="<?= $bod->twitter ?>" class="icofont-twitter"></a>
                                    </li>
                                    <li><a target="_blank" href="<?= $bod->facebook ?>"
                                           class="icofont-facebook"></a>
                                    </li>
                                    <li><a target="_blank" href="<?= $bod->linkedin ?>"
                                           class="icofont-linkedin"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lower-box mt-0">
                                <h4><a href="#"><?= $bod->name ?></a></h4>
                                <div class="designation"><?= $bod->description ?></div>
                                <div class="designation"><?= $bod->desc ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>


<?php if (!empty($members)) { ?>
    <div class="experts-section p-0">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2><?= Yii::t('app', 'members_list') ?></span></h2>
                    </div>
                </div>
            </div>
            <div class="row clearfix">

                <?php if (!empty($members)) {
                    foreach ($members as $member) {
                        ?>
                        <div class="team-block col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <a href="#"><img src="<?= $member->avatar ?>" alt=""/></a>
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a target="_blank" href="<?= $member->twitter ?>"
                                               class="icofont-twitter"></a>
                                        </li>
                                        <li><a target="_blank" href="<?= $member->facebook ?>"
                                               class="icofont-facebook"></a>
                                        </li>
                                        <li><a target="_blank" href="<?= $member->linkedin ?>"
                                               class="icofont-linkedin"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lower-box mt-0">
                                    <h5><a href="#"><?= $member->name ?></a></h5>
                                    <div class="designation"><?= $member->description ?></div>
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
