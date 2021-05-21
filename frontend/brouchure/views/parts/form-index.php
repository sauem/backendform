<?php use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'request-form'
]) ?>

<div class="row clearfix">
    <div class="col-12">
        <?= $form->field($model, 'name')
            ->textInput([
                'placeholder' => 'Họ & Tên'
            ])->label(false) ?>
        <?= $form->field($model, 'type')
            ->hiddenInput(['value' => 'contact'])->label(false) ?>
    </div>

    <div class="col-12">
        <?= $form->field($model, 'email')
            ->textInput([
                'placeholder' => 'Email'
            ])->label(false) ?>
    </div>

    <div class="col-sm-12">
        <?= $form->field($model, 'email')->textInput([
            'placeholder' => 'Tiêu đề'
        ])->label(false) ?>
    </div>

    <div class="col-sm-12">
        <?= $form->field($model, 'message')->textarea(['rows' => 5])->label(false) ?>
    </div>

    <div class="col-sm-12 text-centergroup">
        <button class="theme-btn btn-request-form btn-style-one" type="submit" name="submit-form">
            <span class="txt">
                GỬI YÊU CẦU
            </span>
        </button>
    </div>

</div>
<?php ActiveForm::end(); ?>
