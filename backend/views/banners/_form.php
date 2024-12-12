<?php

use vova07\imperavi\Widget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use \yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\Banners $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="banners-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group field-mfo-logo_file">
                <?php if($model->image) : ?>
                    <img src="<?= $model->image ?>" class="img_slider_view" alt="Image" style="height: 50px">
                <?php else: ?>
                    <b>Баннер отсутствует</b>
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

    <?= $form->field($model, 'text_h1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_h2')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 300,
            'formatting' => ['p', 'blockquote', 'h2', 'h1','h3','div'],
            'attributes' => [
                [
                    'attribute' => 'text',
                    'format' => 'html'
                ]
            ],
            'plugins' => [
                'clips',
                'fullscreen',
                'fontcolor',
            ]

        ]
    ])?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'principles')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 300,
            'replaceDivs' => false,
            'formatting' => ['p', 'blockquote', 'h2', 'h1','h3','div'],
            'imageUpload' => Url::to(['/banners/save-redactor-img','sub'=>'principles']),
            'attributes' => [
                [
                    'attribute' => 'text',
                    'format' => 'html'
                ]
            ],
            'plugins' => [
                'clips',
                'fullscreen',
                'imageupload',
                'imagemanager',
                'filemanager',
                'fontcolor',
            ]
        ]
    ])?>

    <?= $form->field($model, 'advantages')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 300,
            'replaceDivs' => false,
            'formatting' => ['p', 'blockquote', 'h2', 'h1','h3','div'],
            'imageUpload' => Url::to(['/banners/save-redactor-img','sub'=>'advantages']),
            'attributes' => [
                [
                    'attribute' => 'text',
                    'format' => 'html'
                ]
            ],
            'plugins' => [
                'clips',
                'fullscreen',
                'imageupload',
                'imagemanager',
                'filemanager',
                'fontcolor',
            ]
        ]
    ])?>


    <input type="hidden" name="Banners[status]" value="1" />

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
