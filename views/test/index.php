<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;


?>


<div class="col-md-12">
    <h2>Страница с формой</h2>


    <?php Pjax::begin(); ?>

    <?php if(\Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <?= \Yii::$app->session->getFlash('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>


    <?php $form = ActiveForm::begin([
        'id' => 'my-form',
        'options' => [
            'class' => 'form-horizontal',
            'data-pjax' => true,
        ],
        'fieldConfig' => [
            'template' => "{label}\n<div class='col-md-5'> {input} </div>\n <div class='col-md-5'>{hint}</div>\n<div class='col-md-5'>{error}</div>",
            'labelOptions' => ['class' => 'col-md-2 control-label'],
        ],
    ]) ?>

        <?= $form->field($model, 'name')->hint('Заполните поле имя')->textInput(['placeholder' => 'Введите имя']) ?>

        <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Введите email']) ?>

        <?= $form->field($model, 'text')->textarea(['rows' => 7, 'placeholder' => 'введите текст']) ?>

        <div class="form-group">
            <div class="col-md-5 col-md-offset-2">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-default btn-block']) ?>
            </div>
        </div>

    <?php ActiveForm::end() ?>
    <?php Pjax::end(); ?>
</div>