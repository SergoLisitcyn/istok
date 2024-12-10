<?php

use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\Services $model */


if(!empty($model->title)) { $this->title = $model->title; }
if(!empty($model->description)) { $this->registerMetaTag(['name' => 'description','content' => $model->description]); }
$styleBanner = '';
if($model->banner){
    $styleBanner = 'background-image:url('.$model->banner.')';
}
$breadcrumbs = $model->name;
if($model->breadcrumbs){
    $breadcrumbs = $model->breadcrumbs;
}
?>
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs__items">
            <li class="breadcrumbs__item">
                <a href="/services" class="breadcrumbs__link">Виды работ</a>
            </li>
            <li class="breadcrumbs__item">
                <?= $breadcrumbs ?>
            </li>
        </ul>
    </div>
</div>
<section class="finishing-heading heading" style="<?= $styleBanner ?>">
    <div class="container">
        <div class="heading__row">
            <h1 class="heading__title"><?= $model->name; ?></h1>
        </div>
    </div>
</section>

<?php if($model->text) : ?>
<section class="partial-repair">
    <div class="container">
        <div class="partial-repair__row section-row">
            <?= $model->text; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($category) : ?>
<section class="partial-repair-slider section-slider">
    <div class="container">
        <?php if($model->text_top) : ?>
            <?= $model->text_top; ?>
        <?php endif; ?>
        <div class="section-slider__slider <?= $typeClass ?>">
            <?php foreach ($category as $item) :?>
                <?php if($item->type == 1) : ?>
                        <div class="finishing-slider__item">
                            <div class="finishing-slider__row" style="margin-right: 15px">
                                <div class="finishing-slider__title"><?= $item->name; ?></div>
                                <?php if($item->price) : ?>
                                    <div class="finishing-slider__price"><?= $item->price; ?></div>
                                <?php endif; ?>
                                <?php if($item->list) : ?>
                                <div class="finishing-slider__text">Состав работ:</div>
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
                        <?php if($item->url) : ?>
                        <a href="<?= $model->url ?>/<?= $item->url ?>">
                        <?php endif; ?>
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
                            <?php if($item->url) : ?>
                        </a>
                    <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <?php if($model->text_bottom) : ?>
        <div class="finishing-specific">
            <?= $model->text_bottom; ?>
        </div>

        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
<?php if($model->content_bottom) : ?>
    <section class="important-section">
        <div class="container">
            <div class="partial-repair__row class-row section-row">
                <?= $model->content_bottom; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="registration">
    <div class="container">
        <div class="registration__row section-row">
            <h2 class="registration__title">Ответим на ваши вопросы</h2>
            <p class="registration__caption">Оставьте контактные данные и мы свяжемся с вами в ближайшее время</p>
            <form class="registration__form registration-form"  action="/services/<?= $model->url ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                <input type="hidden" name="Feedback[version]" value="1" />
                <div class="registration-form__fields">
                    <div class="registration-form__field">
                        <input type="text" name="Feedback[name]" id="name" class="registration-form__elem name" required="" autocomplete="off" minlength="2" placeholder="Введите ваше имя">
                    </div>
                    <div class="registration-form__field">
                        <input type="tel" name="Feedback[phone]" id="phone" class="registration-form__elem phone" required="" autocomplete="off" placeholder="Введите ваш телефон">
                    </div>
                    <div class="registration-form__field">
                        <input type="email" name="Feedback[email]" id="email" class="registration-form__elem email" required="" autocomplete="off" placeholder="Введите ваш email">
                    </div>
                    <div class="registration-form__field">
                        <div class="registration-form-select registration-form__elem">
                            <div class="registration-form-select__select">
                                <i class="registration-form-select__icon" aria-hidden="true"></i>
                                <span class="registration-form-select__span">Физическое лицо</span>
                            </div>
                            <input class="registration-form-select__input" name="Feedback[type]" id="typeF" value="Физическое лицо"  type="hidden">
                            <ul class="registration-form-select__options" onclick="lang1(event);">
                                <li class="registration-form-select__option">Физическое лицо</li>
                                <li class="registration-form-select__option">Юридическое лицо</li>
                            </ul>
                        </div>
                        <i class="registration-form__icon"></i>
                    </div>
                    <div class="registration-form__field">
                        <textarea class="registration-form__elem" rows="1" name="Feedback[body]" required="" placeholder="Комментарий" autocomplete="off"></textarea>
                    </div>
                    <div class="registration-form__field">
                        <div class="registration-form__dropzone registration-form-dropzone">
                            <div class="registration-form-dropzone__body">
                                <div class="registration-form-dropzone__row">
                                    <div class="registration-form-dropzone__input">
                                        <input type="file" name="Feedback[file]" class="file-upload-input"
                                               onchange="readURL(this);" accept=".pdf,.docx,.doc,.txt,.jpg,.jpeg,.png">
                                    </div>
                                    <div class="registration-form-dropzone__title">
                                        Добавить файл (не обязательно)
                                    </div>
                                </div>
                                <div class="vacancy__dropzone-upload registration-form-dropzone__upload">
                                    <div class="registration-form-dropzone__message">
                                        <img class="registration-form-dropzone__image" src="/img/form-check.svg" alt="Ваш файл">
                                        <div class="registration-form-dropzone__text">Файл загружен</div>
                                    </div>
                                    <div class="registration-form-dropzone__remove-wrap">
                                        <button type="button" onclick="removeUpload()"
                                                class="registration-form-dropzone__remove">Удалить <span class="registration-form-dropzone__remove-title">Uploaded Image</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="registration-form__columns">
                        <p class="registration-form__descr">Нажимая на кнопку «Отправить заявку» Вы даете согласие на обработку своих персональных данных.</p>
                        <button type="submit" class="registration-form__button">Отправить заявку</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
