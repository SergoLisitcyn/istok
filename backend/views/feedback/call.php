<?php

use common\models\Feedback;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Заказать звонок';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'options' => ['width' => '10'],
            ],

            'name',
            'phone',
            [
                'label' => 'Тема',
                'attribute' => 'type'
            ],
            'body:ntext',
            'created_at:datetime',
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'status',
                'hAlign' => 'center',
                'filter' => false,
                'editableOptions' =>  function ($model, $key, $index) {
                    return [
                        'header' => 'статус',
                        'inputType' => 'dropDownList',
                        'data' => [0 =>'Добавлен',1 =>'Просмотрен'],
                    ];
                },
                'value' => function ($model) {
                    $result = '';
                    if($model->status == 0){
                        $result .= 'Добавлен';
                    } elseif($model->status == 1) {
                        $result .= 'Просмотрен';
                    } else {
                        $result .= 'Добавлен';
                    }
                    return $result;
                },
                'contentOptions' => function ($model) {
                    if($model->status == 0){
                        $class = 'danger';
                    } elseif($model->status == 1) {
                        $class = 'success';
                    } else {
                        $class = 'warning';
                    }
                    return ['class' => $class];
                },
            ],
            [
                'label' => 'Действия',
                'format' => 'raw',
                'options' => ['width' => '100'],
                'value' => function ($model, $index, $jobList) {
                    return Html::tag('a', 'Удалить', ['href' => Url::toRoute(['feedback/delete', 'id' => $index,'url' => 'call']), 'data-method' => 'post', 'data-confirm' => 'Вы точно хотите удалить?', 'class' => 'btn btn-order btn-danger', 'style' => 'font-weight: 100']);
                },
            ],
        ],
    ]); ?>


</div>
