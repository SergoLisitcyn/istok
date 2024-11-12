<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/** @var yii\web\View $this */
/** @var common\models\Services $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group field-mfo-logo_file">
                <?php if($model->image) : ?>
                    <img src="<?= $model->image ?>" class="img_slider_view" alt="Image" style="height: 50px">
                <?php else: ?>
                    <b>Изображение отсутствует</b>
                <?php endif; ?>
            </div>
            <?php echo $form->field($model, 'image_file')->widget(FileInput::classname(), [
                'options' => [
                    'accept' => 'image/*',
                    'multiple' => false
                ],
                'pluginOptions' => [
                    'showPreview' => false,
                    'showRemove' => true,
                    'showUpload' => false
                ]
            ]);
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group field-mfo-logo_file">
                <?php if($model->banner) : ?>
                    <img src="<?= $model->banner ?>" class="img_slider_view" alt="Image" style="height: 50px">
                <?php else: ?>
                    <b>Баннер отсутствует</b>
                <?php endif; ?>
            </div>
            <?php echo $form->field($model, 'banner_file')->widget(FileInput::classname(), [
                'options' => [
                    'accept' => 'image/*',
                    'multiple' => false
                ],
                'pluginOptions' => [
                    'showPreview' => false,
                    'showRemove' => true,
                    'showUpload' => false
                ]
            ]);
            ?>
        </div>
    </div>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([
        '1' => 'Активен',
        '0' => 'Не активен'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
