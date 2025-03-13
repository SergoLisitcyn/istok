<?php

use common\models\Gallery;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Галерея «Наши работы»';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'Вид работ',
                'hAlign' => 'center',
                'value' => function ($model) {

                    $result = '';

                    foreach ($model->parent as $parent) {
                        $result .= $parent['name'];
                    }
                    return $result;
                },
            ],
            'name',
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'sort',
                'hAlign' => 'center',
                'filter' => true,
                'value' => function($model){ return $model->sort; },
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'status',
                'hAlign' => 'center',
                'filter' => true,
                'editableOptions' =>  function ($model, $key, $index) {
                    return [
                        'header' => 'статус',
                        'inputType' => 'dropDownList',
                        'data' => [0 =>'Не активен',1 =>'Активен'],
                    ];
                },
                'value' => function ($model) {
                    $result = '';
                    if($model->status == 0){
                        $result .= 'Не активен';
                    } elseif($model->status == 1) {
                        $result .= 'Активен';
                    } else {
                        $result .= 'Активен';
                    }
                    return $result;
                }
            ],
            [
                'label' => 'Действия',
                'format' => 'raw',
                'options' => ['width' => '200'],
                'value' => function ($model, $index) {
                    return Html::tag('a', 'Редактировать', ['href' => Url::toRoute(['gallery/update', 'id' => $index]), 'class' => 'btn btn-success', 'style' => 'font-weight: 100;margin-right:10px'])
                        .Html::tag('a', 'Удалить', ['href' => Url::toRoute(['gallery/delete', 'id' => $index]), 'data-method' => 'post', 'data-confirm' => 'Вы точно хотите удалить?', 'class' => 'btn btn-order btn-danger', 'style' => 'font-weight: 100']);
                },
            ],
        ],
    ]); ?>


</div>
