<?php

use common\models\Applications;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Заявка на консультацию';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applications-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'email:email',
            'phone',
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
                'options' => ['width' => '200'],
                'value' => function ($model, $index) {
                    return Html::tag('a', 'Удалить', ['href' => Url::toRoute(['applications/delete', 'id' => $index]), 'data-method' => 'post', 'data-confirm' => 'Вы точно хотите удалить?', 'class' => 'btn btn-order btn-danger', 'style' => 'font-weight: 100']);
                },
            ],
        ],
    ]); ?>


</div>
