<?php

use common\helper\HelperFunction;

?>
<div class="news-block-three">
    <div class="inner-box">
        <div class="image">
            <a href="<?= HelperFunction::Link(BLOG, $model->slug, $model->archive->slug) ?>">
                <img src="<?= $model->avatar ?>" alt="<?= $model->name ?>">
            </a>
        </div>
        <div class="title"><?= $model->archive->name ?></div>
        <h4><a href="<?= HelperFunction::Link(BLOG, $model->slug, $model->archive->slug) ?>">
                <?= $model->name ?>
            </a></h4>
        <div class="post-date"><?= date('d/m/Y', $model->created_at) ?></div>
    </div>
</div>
