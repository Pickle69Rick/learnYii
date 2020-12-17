<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>


<div class="col-md-12">
    <h2>Страница с формой</h2>

    <?php $form = ActiveForm::begin([
        'id' => 'my-form',
        'options' => [
            'class' => 'form-horizontal',
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

</div>