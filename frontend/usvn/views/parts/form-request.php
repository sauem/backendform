<?php

use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin([
    'id' => 'request-form'
]) ?>
<div class="row">
    <div class="col-12">
        <h4 class="contact-panel__title mb-20"><?= Yii::t('app', 'contact_title') ?></h4>
        <p class="contact-panel__desc mb-30"></p>
    </div> <!-- /.col-12 -->
    <div class="col-sm-6 col-md-6 col-lg-6">
        <?= $form->field($model, 'name')->textInput([
            'placeholder' => Yii::t('app', 'name')
        ])->label(false);
        ?>
    </div><!-- /.col-lg-6 -->
    <div class="col-sm-6 col-md-6 col-lg-6">
        <?= $form->field($model, 'email')->textInput([
            'placeholder' => Yii::t('app', 'email')
        ])->label(false);
        ?>
    </div><!-- /.col-lg-6 -->
    <div class="col-6">
        <?= $form->field($model, 'contact_pre')->textInput(['placeholder' => Yii::t('app', 'phone')])->label(false);
        ?>
    </div>
    <div class="col-6">
        <?= $form->field($model, 'export_country')->dropDownList(
            Yii::$app->params['countries_export'],
            [
                'prompt' => Yii::t('app', 'export_country')
            ])->label(false);
        ?>
    </div><!-- /.col-lg-6 -->

    <div class="col-12">
        <?= $form->field($model, 'message')->textarea([
            'placeholder' => Yii::t('app', 'product_interest')
        ])->label(false);
        ?>

        <button type="button"
                class="btn-request-form
                                        btn btn__primary btn__xl btn__block">
            <?= Yii::t('app', 'submit_req') ?>
        </button>
        <div class="contact-result"></div>
    </div><!-- /.col-12 -->
</div><!-- /.row -->
<?php ActiveForm::end(); ?>
