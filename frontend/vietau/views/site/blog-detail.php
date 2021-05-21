<?php

use common\helper\HelperFunction;

$this->title = $model->name;
Yii::$app->params['header_style'] = true;
?>
<?= $this->render('../parts/page-title', [
    'title' => $model->archive->name,
    'description' => ''
]) ?>
<!-- End Page Title Section -->

<!--Sidebar Page Container-->
<div class="sidebar-page-container padding-top style-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="blog-detail">
                    <div class="inner-box">
                        <div class="image">
                            <img src="<?= $model->avatar ?>" alt="<?= $model->name ?>"/>
                        </div>
                        <div class="lower-content">
                            <h2><?= $model->name ?></h2>
                            <div class="post-info"><span><?= date('d/m/Y', $model->created_at) ?></span></div>
                            <?= $model->content ?>

                        </div>
                    </div>
                </div>
                <?php if (!empty($relatedPosts)) { ?>
                    <!-- Related Projects -->
                    <div class="related-projects">
                        <div class="title-box">
                            <h3>Bài viết liên quan</h3>
                        </div>
                        <div class="row clearfix">
                            <?php foreach ($relatedPosts as $k => $relatedPost) {
                                if ($k == 2) {
                                    break;
                                } ?>
                                <div class="news-block-four col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="<?= HelperFunction::Link(BLOG, $relatedPost->slug, $relatedPost->archive->slug) ?>">
                                                <img src="<?= $relatedPost->avatar ?>" alt=""/>
                                            </a>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title">
                                                <?= $relatedPost->archive->name ?>
                                            </div>
                                            <h4>
                                                <a href="<?= HelperFunction::Link(BLOG, $relatedPost->slug, $relatedPost->archive->slug) ?>">
                                                    <?= $relatedPost->name ?>
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

            <?= $this->render('../parts/sidebar-article', [
                'categories' => $categories,
                'relatedPosts' => $relatedPosts
            ]) ?>

        </div>
    </div>
    <hr>
</div>
