<?php

use common\helper\HelperFunction;

$this->title = $model->name;

Yii::$app->params['header_style'] = true;
?>


<?= $this->render('../parts/page-title', [
    'title' => $model->defaultArchive->name,
    'description' => ''
]) ?>
<div class="sidebar-page-container padding-top style-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-md-9 col-sm-12">
                <div class="blog-detail">
                    <div class="inner-box">
                        <div class="image">
                            <img src="<?= $model->avatar ?>" alt="<?= $model->name ?>"/>
                        </div>
                        <div class="lower-content">
                            <div class="post-info"><span><?= date('d/m/Y', $model->created_at) ?></span></div>
                            <?= $model->content ?>

                        </div>
                    </div>
                </div>
                <?php if (!empty($relatedProducts)) { ?>
                    <!-- Related Projects -->
                    <div class="related-projects">
                        <div class="title-box">
                            <h3><?= Yii::t('app','recent_product')?></h3>
                        </div>
                        <div class="row clearfix">
                            <?php foreach ($relatedProducts as $k => $relatedProduct) {
                                if ($k == 2) {
                                    break;
                                } ?>
                                <div class="news-block-four col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="<?= HelperFunction::Link(PRODUCT, $relatedProduct->slug, $relatedProduct->defaultArchive->slug) ?>">
                                                <img src="<?= $relatedProduct->avatar ?>" alt=""/>
                                            </a>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title">
                                                <?= $relatedProduct->defaultArchive->name ?>
                                            </div>
                                            <h4>
                                                <a href="<?= HelperFunction::Link(PRODUCT, $relatedProduct->slug, $relatedProduct->defaultArchive->slug) ?>">
                                                    <?= $relatedProduct->name ?>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                <?php } ?>

            </div>

            <?= $this->render('../parts/sidebar-product', [
                'categories' => $categories,
                'relatedPosts' => $relatedPosts
            ]) ?>

        </div>
    </div>
    <hr>
</div>
