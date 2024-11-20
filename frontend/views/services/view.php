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
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs__items">
            <li class="breadcrumbs__item">
                <a href="/services" class="breadcrumbs__link">Виды работ</a>
            </li>
            <li class="breadcrumbs__item">
                <?= $model->name; ?>
            </li>
        </ul>
    </div>
</div>
<section class="finishing-heading heading" style="<?= $styleBanner ?>">
    <div class="container">
        <div class="heading__row">
            <h1 class="heading__title">Виды работ</h1>
        </div>
    </div>
</section>

<section class="partial-repair">
    <div class="container">
        <?= $model->text; ?>
    </div>
</section>

<?php if($category) : ?>
<section class="partial-repair-slider section-slider">
    <div class="container">
<!--        <h3 class="partial-repair-slider__subtitle section-subtitle">Мы производим следующие работы:</h3>-->
        <div class="section-slider__slider uni-slider">
            <?php foreach ($category as $item) :?>
                <?php if($item->type == 1) : ?>
                        <div class="finishing-slider__item">
                            <div class="finishing-slider__row" style="margin-right: 15px">
                                <div class="finishing-slider__title"><?= $item->name; ?></div>
                                <?php if($item->price) : ?>
                                    <div class="finishing-slider__price"><?= $item->price; ?></div>
                                <?php endif; ?>
                                <?php if($item->list) : ?>
                                <div class="finishing-slider__text">Cостав работ:</div>
                                <div class="finishing-slider__column">
                                    <ul class="finishing-slider__list finishing-slider-list">
                                        <?php foreach ($item->list as $list) :?>
                                            <li class="finishing-slider-list__item"><?= $list ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php endif; ?>
                <?php if($item->type == 2) : ?>
                    <div class="uni-slider__item">
                        <div class="uni-slider__row">
                            <?php if($item->image) : ?>
                                <div class="uni-slider__image">
                                    <img src="<?= $item->image; ?>" alt="<?= $item->name; ?>">
                                </div>
                            <?php endif; ?>
                            <div class="uni-slider__column">
                                <?php if($item->desc) : ?>
                                <div class="uni-slider__info">
                                    <p class="uni-slider__descr"><?= $item->desc; ?></p>
                                </div>
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
                    </div>
                <?php endif; ?>

                <?php if($item->type == 3) : ?>
                    <div class="minor-repair-slider__item">
                        <?php if($item->number) : ?>
                            <div class="minor-repair-slider__number"><?= $item->number; ?></div>
                        <?php endif; ?>
                        <div class="minor-repair-slider__title"><?= $item->name; ?></div>
                        <?php if($item->desc) : ?>
                        <div class="minor-repair-slider__text"><?= $item->desc; ?></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if($item->type == 4) : ?>
                    <div class="uni-slider__item">
                        <div class="uni-slider__row">
                            <?php if($item->image) : ?>
                                <div class="uni-slider__image">
                                    <img src="<?= $item->image; ?>" alt="<?= $item->name; ?>">
                                </div>
                            <?php endif; ?>
                            <div class="uni-slider__column">
                                <div class="uni-slider__info">
                                    <div class="uni-slider__title"><?= $item->name; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
