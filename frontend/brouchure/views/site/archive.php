<?php
$this->title = $model->name ? $model->name : 'Archive';

use yii\widgets\ListView;

Yii::$app->params['header_style'] = true;

?>


<?= $this->render('../parts/page-title', [
    'title' => $model->name,
    'description' => ''
]) ?>
<div class="sidebar-page-container padding-top">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="our-blogs">
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '../parts/' . ($model->type === 'product' ? '_item_product' : '_item_article'),
                        'emptyText' => 'No results.',
                        'viewParams' => [
                            'archive' => $model
                        ],
                        'options' => ['class' => 'row'],
                        'itemOptions' => [
                            'tag' => 'article',
                            # 'class' => 'col-12 col-md-4 mix',
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
            <?= $this->render('../parts/sidebar-article', [
                'categories' => $categories,
                'relatedPosts' => $relatedPosts
            ]) ?>
        </div>
    </div>
</div>

