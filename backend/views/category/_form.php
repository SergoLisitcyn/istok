<?php

use common\models\Services;
use kartik\widgets\FileInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use unclead\multipleinput\MultipleInput;
use yii2jodit\JoditWidget;
use yii\web\JsExpression;

/** @var yii\web\View $this */
/** @var common\models\Category $model */
/** @var yii\widgets\ActiveForm $form */

if($model){
    $type1 = '';
    $type2 = '';
    $type3 = '';
    $type4 = '';
    if($model['id']){
        if($model['type'] == 1){
            $type1 = 'checked';
        }
        if($model['type'] == 2){
            $type2 = 'checked';
        }
        if($model['type'] == 3){
            $type3 = 'checked';
        }
        if($model['type'] == 4){
            $type4 = 'checked';
        }
    } else {
        $type1 = 'checked';
    }
}

?>
<script type="text/javascript">
    function ShowHideDiv() {
        var type1 = document.getElementById("type1");
        var type2 = document.getElementById("type2");
        var type3 = document.getElementById("type3");
        var type4 = document.getElementById("type4");
        var number = document.getElementById("number");
        var name = document.getElementById("name");
        var imageId = document.getElementById("imageId");
        var desc = document.getElementById("desc");
        var price = document.getElementById("price");
        var url = document.getElementById("url");
        var list = document.getElementById("list");

        if(type1.checked){
            number.style.display = "none";
            name.style.display = "block";
            imageId.style.display = "none";
            desc.style.display = "none";
            price.style.display = "block";
            url.style.display = "none";
            list.style.display = "block";
        }

        if(type2.checked){
            number.style.display = "none";
            name.style.display = "block";
            imageId.style.display = "block";
            desc.style.display = "block";
            price.style.display = "block";
            url.style.display = "none";
            list.style.display = "none";
        }

        if(type3.checked){
            number.style.display = "block";
            name.style.display = "block";
            imageId.style.display = "none";
            desc.style.display = "block";
            price.style.display = "none";
            url.style.display = "none";
            list.style.display = "none";
        }

        if(type4.checked){
            number.style.display = "none";
            name.style.display = "block";
            imageId.style.display = "block";
            desc.style.display = "none";
            price.style.display = "none";
            url.style.display = "none";
            list.style.display = "none";
        }
    }
</script>
<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group field-mfo-logo_file">
        <b>Выберите тип карты</b>
    </div>
    <label>
        <input type="radio" name="Category[type]" id="type1" value="1" <?= $type1 ?>  onclick="ShowHideDiv()">
        <img class="radio-image" src="../images/finishing.png" height="150" alt="finishing">
    </label>
    <label>
        <input type="radio" name="Category[type]" value="2"   id="type2" <?= $type2 ?>   onclick="ShowHideDiv()">
        <img class="radio-image" src="../images/industrial.png" height="150" alt="industrial">
    </label>
    <label>
        <input type="radio" name="Category[type]" value="3"  id="type3" <?= $type3 ?>  onclick="ShowHideDiv()">
        <img class="radio-image" src="../images/minor.png" height="150" alt="minor">
    </label>
    <label>
        <input type="radio" name="Category[type]" value="4"  id="type4" <?= $type4 ?>  onclick="ShowHideDiv()">
        <img class="radio-image" src="../images/partial.png" height="150" alt="partial">
    </label>

    <?=  $form->field($model, 'parent_id', [
        'options' =>
            ['id' => 'vacancy-parent_id', 'class' => 'form-group']
    ])->dropDownList(
        ArrayHelper::map(Services::find()->orderBy(['sort' => SORT_ASC])->all(), 'id', 'name'),
        ['prompt' => 'Выбрать вид работ']
    );
    ?>
    <div id="number">
        <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>
    </div>

    <div id="name">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="row" id="imageId">
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

    <div id="desc">
        <?= $form->field($model, 'desc')->textarea(['rows' => 3]) ?>
    </div>
    <div id="price">
        <?= $form->field($model, 'price')->widget(JoditWidget::className(), [
            'settings' => [
                'height'=>'250px',
                'enableDragAndDropFileToEditor'=>new JsExpression("true"),
            ],
        ]);?>
    </div>
    <div id="url">
        <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
    </div>
    <div id="list">
    <?php
    echo $form->field($model, 'list')->widget(MultipleInput::className(), [
        'min'               => 0,
        'allowEmptyList'    => false,
        'enableGuessTitle'  => true,
        'addButtonPosition' => MultipleInput::POS_HEADER,
    ])
        ->label(false);
    ?>
    </div>
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
