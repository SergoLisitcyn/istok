<?php

use unclead\multipleinput\MultipleInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Settings $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="settings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'whatsapp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dzen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'call')->dropDownList([
        '1' => 'Включен',
        '0' => 'Выключен'
    ]) ?>

    <?php
    echo $form->field($model, 'call_list')->widget(MultipleInput::className(), [
        'min'               => 0,
        'allowEmptyList'    => false,
        'enableGuessTitle'  => true,
        'addButtonPosition' => MultipleInput::POS_HEADER,
    ])
        ->label(false);
    ?>

    <?= $form->field($model, 'call_alert')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maps')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'analytics')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
