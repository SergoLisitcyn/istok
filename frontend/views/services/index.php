<?php

use common\models\Services;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

if(!empty($pages->title_seo)) { $this->title = $pages->title_seo; }
if(!empty($pages->description)) { $this->registerMetaTag(['name' => 'description','content' => $pages->description]); }
$titleH1 = $pages->name;
if($pages->title){
    $titleH1 = $pages->title;
}
?>
<section class="services-heading heading">
    <div class="container">
        <div class="heading__row">
            <h1 class="heading__title"><?= $titleH1 ?></h1>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="services__row section-row">
            <?php if($pages && $pages->content) : ?>
                <?= $pages->content ?>
            <?php endif; ?>
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
                            <a href="services/<?= $service->url; ?>" class="uni-slider__button">Подробнее</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section class="registration">
    <div class="container">
        <div class="registration__row section-row">
            <h2 class="registration__title">Ответим на ваши вопросы</h2>
            <p class="registration__caption">Оставьте контактные данные и мы свяжемся с вами в ближайшее время</p>
            <form class="registration__form registration-form"  action="/services" method="post" enctype="multipart/form-data">
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
                        <textarea class="registration-form__elem" rows="1" name="Feedback[body]" placeholder="Комментарий" required="" autocomplete="off"></textarea>
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
                                        <img class="registration-form-dropzone__image" src="img/form-check.svg" alt="Ваш файл">
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
