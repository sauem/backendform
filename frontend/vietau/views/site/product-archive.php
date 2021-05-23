<?php
$this->title = $model->name ? $model->name : 'Archive';

use yii\widgets\ListView;

Yii::$app->params['header_style'] = true;

?>


<?= $this->render('../parts/page-title', [
    'title' => $model->name,
    'description' => ''
]) ?>
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
<?= $this->render('../parts/logo',['logos' => $logos])?>
