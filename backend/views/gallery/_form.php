<?php

use common\models\Services;
use unclead\multipleinput\MultipleInput;
use unclead\multipleinput\TabularInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Gallery $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="gallery-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?=  $form->field($model, 'parent_id', [
        'options' =>
            ['id' => 'vacancy-parent_id', 'class' => 'form-group']
    ])->dropDownList(
        ArrayHelper::map(Services::find()->orderBy(['sort' => SORT_ASC])->all(), 'id', 'name'),
        ['prompt' => 'Выбрать вид работ']
    );
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'image')->widget(MultipleInput::className(), [
        'min' => 0,
        'allowEmptyList'    => false,
        'columns' => [
            [
                'name'  => 'file',
                'type'  => kartik\widgets\FileInput::className(),
                'title' => 'Изображение',
                'options' => [
                    'pluginOptions' => [
                        'showPreview' => false,
                        'showRemove' => true,
                        'showUpload' => false
                    ],
                ],
                'value' => null
            ],
            [
                'name'  => 'desc',
                'title' => 'Описание',
                'type' => 'textInput'
            ]
        ]
        ])->label();
    ?>



    <?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>


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