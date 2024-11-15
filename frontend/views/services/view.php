<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Services $model */


if(!empty($model->title_seo)) { $this->title = $model->title_seo; }
if(!empty($model->description)) { $this->registerMetaTag(['name' => 'description','content' => $model->description]); }
$styleBanner = '';
if($model->banner){
    $styleBanner = 'background-image:'.$model->banner;
}

?>
<section class="finishing-heading heading" style="<?= $styleBanner ?>">
    <div class="container">
        <div class="heading__row">
            <h1 class="heading__title">Виды работ</h1>
        </div>
    </div>
    <?= $model->text; ?>
</section>
<?php if($category) : ?>
<section class="partial-repair-slider section-slider">
    <div class="container">
        <h3 class="partial-repair-slider__subtitle section-subtitle">Мы производим следующие работы:</h3>
        <div class="section-slider__slider uni-slider">
            <div class="uni-slider__item">
                <?php foreach ($category as $item) :?>
                <div class="uni-slider__row">
                    <?php if($item->number) : ?>
                    <div class="minor-repair-slider__number"><?= $item->number; ?></div>
                    <?php endif; ?>
                    <?php if($item->image) : ?>
                    <div class="uni-slider__image">
                        <img src="<?= $item->image; ?>" alt="<?= $item->name; ?>">
                    </div>
                    <?php endif; ?>
                    <div class="uni-slider__column">
                        <div class="uni-slider__info">
                            <div class="uni-slider__title"><?= $item->name; ?></div>
                        </div>
                        <?php if($item->desc) : ?>
                        <div class="minor-repair-slider__text"><?= $item->desc; ?></div>
                        <?php endif; ?>
                        <?php if($item->price) : ?>
                        <div class="industrial-slider__info industrial-slider-info">
                            <div class="industrial-slider-info__row">
                                <div class="industrial-slider-info__price"><?= $item->price; ?></div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>
<?php endif; ?>
