<?php

use common\helper\HelperFunction;

$this->title = $model->name;
$this->params['header_type'] = 'light';
?>


<section class="page-title page-title-layout15 text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <nav>
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/"><?= Yii::t('app', 'home') ?></a></li>
                        <li class="breadcrumb-item"><a
                                    href="<?= PRODUCT_AND_BRIEF ?>"><?= Yii::t('app', 'product') ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= $model->name ?>
                        </li>
                    </ol>
                </nav>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<section class="blog blog-single pt-0 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="post-item mb-0">
                    <div class="post__img">
                        <a href="#">
                            <img width="100%" src="<?= $model->avatar ?>" alt="blog image">
                        </a>
                    </div><!-- /.post-img -->
                    <div class="post__content">
                        <div class="post__meta d-inline-flex flex-wrap align-items-center mb-0">
                            <span class="post__meta-date">
                              <i class="icon-calendar-new"></i>  <?= date('d/m/Y', $model->created_at) ?>
                            </span>
                        </div>
                        <h1 class="post__title">
                            <?= $model->name ?>
                        </h1>
                        <div class="post__desc">
                            <?= $model->content ?>
                        </div>
                        <a href="/<?= PRODUCT_AND_BRIEF ?>" class="btn btn__secondary btn__bordered btn__icon">
                            <span><?= Yii::t('app', 'product_and_brief') ?></span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <?php if (!empty($model->thumbs)) {
                    ?>
                    <hr>
                    <div class="row gallery">
                        <div class="col-12">
                            <h5 class="post__title">
                                Thư viện:
                            </h5>
                        </div>
                        <?php foreach ($model->thumbs as $key => $thumb) {
                            ?>
                            <div class="col-md-4 px-2 mb-3">
                               <div class="gallery-item">
                                   <a href="<?= HelperFunction::getImage($thumb->path) ?>">
                                       <img class="img-fluid" src="<?= HelperFunction::getImage($thumb->path) ?>">
                                   </a>
                               </div>
                            </div>
                            <?php
                        } ?>
                    </div>
                    <?php
                } ?>

                <hr>
                <div class="widget-nav d-flex justify-content-between mb-40">
                    <?php if ($prevProduct && isset($prevProduct->defaultArchive)) {

                        ?>
                        <a href="<?= HelperFunction::Link(PRODUCT, $prevProduct->slug,$prevProduct->defaultArchive->slug) ?>"
                           class="widget-nav__prev d-flex flex-wrap">
                            <div class="widget-nav__img">
                                <div class="widget-nav__overlay"></div>
                                <img src="<?= $prevProduct->avatar ?>" alt="<?= $prevProduct->name ?>">
                            </div>
                            <div class="widget-nav__content">
                                <span><?= Yii::t('app', 'prev', ['type' => 'Sản phẩm']) ?></span>
                                <h5 class="fz-16 mb-0 text-2">
                                    <?= $prevProduct->name ?>
                                </h5>
                            </div>
                        </a>
                        <?php
                    } ?>
                    <?php if ($nextProduct && isset($nextProduct->defaultArchive)) {
                        ?>
                        <a href="<?= HelperFunction::Link(PRODUCT, $nextProduct->slug, $nextProduct->defaultArchive->slug) ?>"
                           class="widget-nav__next d-flex flex-wrap">
                            <div class="widget-nav__img">
                                <div class="widget-nav__overlay"></div>
                                <img src="<?= $nextProduct->avatar ?>" alt="<?= $nextProduct->name ?>">
                            </div>
                            <div class="widget-nav__content">
                                <span><?= Yii::t('app', 'next', ['type' => Yii::t('app', 'product')]) ?></span>
                                <h5 class="fz-16 mb-0 text-2">
                                    <?= $nextProduct->name ?>
                                </h5>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <?= $this->render('../parts/sidebar-product', [
                    'categories' => $categories,
                    'relatedProducts' => $relatedProducts
                ]) ?>
            </div>
        </div>
    </div>
</section>
