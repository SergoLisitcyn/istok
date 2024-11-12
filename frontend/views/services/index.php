<?php

use common\models\Services;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'ИСК "Исток - Виды работ';
$this->registerMetaTag(['name' => 'description','content' => '«Исток» – инженерно-строительная компания с большим опытом возведения коммерческих и жилых объектов: от «коробки» до отделочных работ']);

?>
<section class="services-heading heading">
    <div class="container">
        <div class="heading__row">
            <h1 class="heading__title">Виды работ</h1>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="services__row section-row">
            <p class="services__descr section-descr">Компания «Исток» предлагает широкий перечень инженерно-строительных работ:</p>
            <div class="services__slider uni-slider uni-slider--min-height">
                <?php foreach($services as $service) : ?>
                <div class="uni-slider__item">
                    <div class="uni-slider__row">
                        <?php if($service->image) : ?>
                            <div class="uni-slider__image">
                                <img src="<?= $service->image; ?>" alt="<?= $service->name; ?>">
                            </div>
                        <?php endif; ?>
                        <div class="uni-slider__column">
                            <div class="uni-slider__info">
                                <div class="uni-slider__title"><?= $service->name; ?></div>
                                <p class="uni-slider__descr"><?= $service->desc; ?></p>
                            </div>
                            <a href="<?= $service->url; ?>" class="uni-slider__button">Подробнее</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
