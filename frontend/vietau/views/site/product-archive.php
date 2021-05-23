<?php
$this->title = $model->name ? $model->name : 'Archive';

use common\helper\HelperFunction;
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
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '../parts/_item_archive_product',
                'emptyText' => 'No results.',
                'viewParams' => [
                    'archive' => $model
                ],
                'options' => ['class' => 'row g-0'],
                'itemOptions' => [
                    'tag' => 'article',
                    'class' => 'service-block col-lg-3 col-md-6 col-sm-12',
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
            ]) ?>
        </div>
    </div>
</div>
<?= $this->render('../parts/logo', ['logos' => $logos]) ?>
