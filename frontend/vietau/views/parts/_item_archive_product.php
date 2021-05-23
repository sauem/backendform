<?php
?>

<div class="inner-box p-3">
    <div class="icon-box">
        <?php use common\helper\HelperFunction;

        if ($model->avatar) { ?>
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
