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
$imagesArray = $model->image ?? [];
$id = null;
if($model){
    $id = $model->id;
}
?>
<style>
    .image-preview img {
        width: 150px;
    }

    .image-preview div {
        margin-top:10px;
    }
    .form-input-image {
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        color: #555555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        width: 50%;
    }
    .delete-btn {
        background-color: #dd4b39;
        border-color: #d73925;
        top: 5px;
        right: 5px;
        color: white;
        border-radius: 3px;
        -webkit-box-shadow: none;
        box-shadow: none;
        cursor: pointer;
        padding: 6px 12px;
        font-size: 14px;
    }
</style>
<div class="gallery-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<!--    <input type="file" name="images[]" accept="image/*" id="imageInput">-->


    <?=  $form->field($model, 'parent_id', [
        'options' =>
            ['id' => 'vacancy-parent_id', 'class' => 'form-group']
    ])->dropDownList(
        ArrayHelper::map(Services::find()->orderBy(['sort' => SORT_ASC])->all(), 'id', 'name'),
        ['prompt' => 'Выбрать вид работ']
    );
    ?>


    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'image[]')->fileInput(['maxlength' => true,'id' => 'imageInput']) ?>
    <div class="image-preview" id="preview">
        <?php if (!empty($imagesArray)): ?>
            <?php foreach ($imagesArray as $index => $image): ?>
                <div class="image-container" data-index="<?= $index ?>">
                    <img src="<?= $image['file'] ?>" alt="Загруженное изображение">
                    <input type="text" class="form-input-image" name="descriptions[]" value="<?= $image['desc'] ?>" placeholder="Введите описание">
                    <button type="button" class="delete-btn" data-index="<?= $index ?>" data-modelId = "<?= $id ?>">X</button>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
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


<script>
    document.getElementById('imageInput').addEventListener('change', function(event) {
        let preview = document.getElementById('preview');
        let fileList = event.target.files;

        if (!window.selectedFiles) {
            window.selectedFiles = [];
        }

        Array.from(fileList).forEach(file => {
            // Проверяем, нет ли уже такого файла в массиве
            if (!window.selectedFiles.some(f => f.name === file.name)) {
                window.selectedFiles.push(file);

                let reader = new FileReader();
                reader.onload = function(e) {
                    let div = document.createElement('div');
                    div.innerHTML = `<img src="${e.target.result}" alt="Изображение">
                                 <input type="text" class="form-input-image" name="descriptions[]" placeholder="Введите описание">
                                 <button type="button" class="delete-btn">X</button>`;

                    // Создаем новый скрытый file input
                    let hiddenInput = document.createElement('input');
                    hiddenInput.type = 'file';
                    hiddenInput.name = 'image[]';
                    hiddenInput.files = event.target.files; // Передаем файлы
                    hiddenInput.style.display = 'none';
                    document.querySelector('form').appendChild(hiddenInput);

                    // Удаление файла при нажатии "X"
                    div.querySelector('.delete-btn').addEventListener('click', function() {
                        div.remove();
                        window.selectedFiles = window.selectedFiles.filter(f => f.name !== file.name);
                        hiddenInput.remove(); // Удаляем input
                    });

                    preview.appendChild(div);
                };
                reader.readAsDataURL(file);
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function() {
                var index = this.dataset.index;
                var modelId = this.dataset.modelid;
                var container = this.closest(".image-container");
                container.remove();

                // Отправляем AJAX-запрос на удаление
                fetch("deleteimage", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: "index=" + index + "&id=" + modelId
                }).then(response => response.json()).then(data => {
                    if (!data.success) {
                        alert("Ошибка удаления");
                    }
                });
            });
        });
    });
</script>
