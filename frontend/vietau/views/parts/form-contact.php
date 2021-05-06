<?php use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'request-form'
]) ?>

<div class="row clearfix">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <?= $form->field($model, 'name')
            ->textInput([
                'placeholder' =>Yii::t('app','fullname')
            ])->label(false) ?>
        <?= $form->field($model, 'type')
            ->hiddenInput(['value' => 'contact'])->label(false) ?>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <?= $form->field($model, 'email')
            ->textInput([
                'placeholder' => Yii::t('app','email')
            ])->label(false) ?>
    </div>

    <div class="col-lg-4 col-md-12 col-sm-12 form-group">
        <?= $form->field($model, 'email')->textInput([
            'placeholder' => Yii::t('app','subject')
        ])->label(false) ?>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
        <?= $form->field($model, 'message')->textarea(['rows' => 5])->label(false) ?>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
        <button class="theme-btn btn-request-form btn-style-one" type="submit" name="submit-form">
            <span class="txt">
               <?= Yii::t('app','submit_req')?>
            </span>
        </button>
    </div>

</div>
<?php ActiveForm::end(); ?>
