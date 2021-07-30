<?php

use common\helper\HelperFunction;

$this->title = Yii::t('app', 'about');
$this->params['header_type'] = 'light';
?>


<section class="page-title page-title-layout15 text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <nav>
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/"><?= Yii::t('app', 'home') ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= $this->title ?>
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
            <?= HelperFunction::setting('about_us', true) ?>
        </div>
    </div>
</section>
