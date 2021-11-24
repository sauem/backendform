<?php

use common\helper\HelperFunction;

?>
<div class="col-md-4">
    <div class="blog-post">
        <div class="blog-post-img">
            <a href="/<?= $model->archive->slug ?>/<?= $model->slug ?>">
                <img class="img-fluid" src="<?= $model->avatar ?>" alt="<?= $model->name ?>"/>
            </a>
        </div>
        <div class="blog-post-txt">
            <p class="do mb-0"><?= date('d/m/Y', $model->created_at) ?></p>
            <h5 class="h5-sm text-2">
                <a href="/<?= $model->archive->slug ?>/<?= $model->slug ?>">
                    <?= $model->name?>
                </a>
            </h5>
            <p class="excerpt text-3">
                <?= $model->excerpt ?>
            </p>
            <a href="/<?= $model->archive->slug ?>/<?= $model->slug ?>">
                Đọc thêm
                <i class="fas ml-2 fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
