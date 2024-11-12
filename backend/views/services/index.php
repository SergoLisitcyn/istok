<?php

use common\models\Services;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Виды работ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'desc',
            'url:url',
//            'image',
            //'banner',
            //'text:ntext',
            //'title',
            //'description',
            //'sort',
            'status',
            [
                'label' => 'Действия',
                'format' => 'raw',
                'options' => ['width' => '200'],
                'value' => function ($model, $index) {
                    return Html::tag('a', 'Редактировать', ['href' => Url::toRoute(['services/update', 'id' => $index]), 'class' => 'btn btn-success', 'style' => 'font-weight: 100;margin-right:10px'])
                        .Html::tag('a', 'Удалить', ['href' => Url::toRoute(['services/delete', 'id' => $index]), 'data-method' => 'post', 'data-confirm' => 'Вы точно хотите удалить?', 'class' => 'btn btn-order btn-danger', 'style' => 'font-weight: 100']);
                },
            ],
        ],
    ]); ?>


</div>
