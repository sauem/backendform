<?php

use common\helper\HelperFunction;

?>
<div class="item-product-home hvr-shadow">
    <div class="img">
        <a href="/san-pham/<?= $model->defaultArchive->slug ?>/<?= $model->slug?>">
            <img src="<?= HelperFunction::checkImage($model->avatar)?>"
                 class="w-100 img-fluid"/>
        </a>
    </div>
    <div class="product-info">
        <p class="product-name text-1">
            <a href="/san-pham/<?= $model->defaultArchive->slug ?>/<?= $model->slug?>">{{$model->name}}</a>
        </p>
        <p>{{$model->sub_name}}</p>
        <p class="product-price"><?= HelperFunction::htmlPrice($model)?></p>

    </div>
</div>
