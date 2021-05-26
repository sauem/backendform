<?php

use common\helper\HelperFunction;

?>
<div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
    <aside class="sidebar sticky-top margin-left">

        <!-- Search -->
        <div class="sidebar-widget search-box">
            <div class="sidebar-title">
                <h4><?= Yii::t('app', 'search') ?></h4>
            </div>
            <form method="GET" action="/<?= SEARCH ?>">
                <div class="form-group">
                    <input type="search" name="s" value="" placeholder="Search..." required>
                    <button type="submit"><span class="icon fa fa-search"></span></button>
                </div>
            </form>
        </div>
        <?php if (isset($categories) && !empty($categories)) { ?>
            <!--Category Blog-->
            <div class="sidebar-widget categories-blog">
                <div class="sidebar-title">
                    <h4><?= Yii::t('app', 'category') ?></h4>
                </div>
                <ul>
                    <?php foreach ($categories as $category) { ?>
                        <li>
                            <a href="<?= HelperFunction::Link(ARCHIVE, $category->slug) ?>">
                                <?= $category->name ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
        <?php if (!empty($relatedPosts)) { ?>
            <!-- Popular Posts -->
            <div class="sidebar-widget popular-posts">
                <div class="sidebar-title">
                    <h4><?= Yii::t('app', 'related_post') ?></h4>
                </div>
                <div class="widget-content">
                    <?php foreach ($relatedPosts

                                   as $relatedPost) { ?>
                        <div class="post">
                            <figure class="post-thumb">
                                <a href="<?= HelperFunction::Link(BLOG, $relatedPost->slug, $relatedPost->archive->slug) ?>">
                                    <img height="55" src="<?= $relatedPost->avatar ?>"
                                         alt="<?= $relatedPost->name ?>">
                                </a>
                            </figure>
                            <div class="text">
                                <a class="text-2"
                                   href="<?= HelperFunction::Link(BLOG, $relatedPost->slug, $relatedPost->archive->slug) ?>">
                                    <?= $relatedPost->name ?>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </aside>
</div>
