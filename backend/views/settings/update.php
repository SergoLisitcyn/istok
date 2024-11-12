<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Settings $model */

$this->title = 'Настройки';
?>
<div class="settings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
