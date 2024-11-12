<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Services $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Виды работ', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="services-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
