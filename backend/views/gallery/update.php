<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Gallery $model */

$this->title = 'Обновить: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Галерея «Наши работы»', 'url' => ['index']];
?>
<div class="gallery-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
