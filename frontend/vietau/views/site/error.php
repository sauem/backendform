<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="astute-blog-area astute-blog-single em-single-page-comment single-blog-details">
    <div class="container text-center">
        <h1 class="error-code">404</h1>
        <p class="error__desc">
            <?php
            $exception = Yii::$app->errorHandler->exception;
            echo $exception->getMessage();
            ?>

        </p>
        <a href="/" class="btn btn__primary btn__icon">
            <span><?= Yii::t('app','back_to_home')?></span> <i class="icon-arrow-right"></i>
        </a>
    </div>
</div>
