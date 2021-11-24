<?php

$this->title = Yii::t('app', 'search');

use yii\widgets\ListView;

Yii::$app->params['header_style'] = true;

?>

<div class="sidebar-page-container pt-5">
    <div class="auto-container">

        <div class="row clearfix">
            <!-- Content Side -->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="sec-title">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h2><?= Yii::t('app', 'post') ?></span></h2>
                        </div>
                    </div>
                </div>
                <div class="our-blogs">
                    <?= ListView::widget([
                        'dataProvider' => $articleProvider,
                        'itemView' => '../parts/_item_article',
                        'emptyText' => 'No results.',
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

                <div class="our-blogs">
                    <div class="sec-title">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h2><?= Yii::t('app', 'products') ?></span></h2>
                            </div>
                        </div>
                    </div>
                    <?= ListView::widget([
                        'dataProvider' => $productProvider,
                        'itemView' => '../parts/_item_product',
                        'emptyText' => 'No results.',
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

