<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Pages $model */

$this->title = $model->name;
?>
<div class="pages-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
