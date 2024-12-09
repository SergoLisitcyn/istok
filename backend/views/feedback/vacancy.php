<?php

use common\models\Feedback;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Резюме';
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
            'email:email',
            'phone',
            'type',
            'body:ntext',
            [
                'attribute' => 'file_src_filename',
                'label' => 'Файл',
                'format' => 'raw',

                'contentOptions' => ['class' => 'text-center'],
                'headerOptions' => ['class' => 'text-center'],
                'value' => function ($data) {
                    if($data->filename){
                        return
                            Html::a('Скачать файл', ['feedback/download', 'id' => $data->id],['class' => 'btn btn-primary']);
                    }
                    return 'Без файла';
                }
            ],
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
                    return Html::tag('a', 'Удалить', ['href' => Url::toRoute(['feedback/delete', 'id' => $index]), 'data-method' => 'post', 'data-confirm' => 'Вы точно хотите удалить?', 'class' => 'btn btn-order btn-danger', 'style' => 'font-weight: 100']);
                },
            ],
        ],
    ]); ?>


</div>
