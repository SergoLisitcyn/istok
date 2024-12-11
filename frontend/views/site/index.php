<?php

/** @var yii\web\View $this */

use frontend\widgets\HeaderWidget;

$this->title = HeaderWidget::widget(['type' => 'titleSeo']);
$this->registerMetaTag(['name' => 'description','content' => HeaderWidget::widget(['type' => 'description'])]);
?>
<?php if($banner) : ?>
<section class="main-info">
    <div class="container">
        <div class="main-info__row">
            <?php if($banner->text_h1) : ?>
            <h1 class="main-info__title"><?= $banner->text_h1 ?></h1>
            <?php endif; ?>
            <?php if($banner->text_h2) : ?>
                <h2 class="main-info__descr"><?= $banner->text_h2 ?></h2>
            <?php endif; ?>
            <a href="#registration" class="main-info__button button to-registration">Отправить заявку</a>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if($services) : ?>
<section class="services">
    <div class="container">
        <div class="services__row section-row">
            <h2 class="services__title section-title">Работы, которые мы выполняем</h2>
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
                            <a href="services/<?= $service->url; ?>" class="uni-slider__button">Подробнее</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($banner && $banner->principles) : ?>
<section class="principles">
    <div class="container">
        <div class="principles__row section-row">
            <?= $banner->principles; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<section class="registration" id="registration">
    <div class="container">
        <div class="registration__row section-row">
            <div class="registration__columns">
                <div class="registration__col">
                    <h3 class="registration__subtitle">Компания «Исток» – это надежный партнер в сфере инженерно-строительных решений.</h3>
                    <p class="registration__text">Гарантируем вам выполнение трех пунктов:</p>
                    <ul class="registration__list registration-list">
                        <li class="registration-list__item">лояльное сочетание цены и качества строительных услуг,</li>
                        <li class="registration-list__item">профессиональное информационное сопровождение</li>
                        <li class="registration-list__item">безукоризненное качество выполняемых работ.</li>
                    </ul>
                </div>
                <div class="registration__col">
                    <p class="registration__descr">Закажите консультацию нашего специалиста, чтобы рассчитать смету и сроки по своему проекту и получить рекомендации наших профильных мастеров!</p>
                    <form class="registration__form registration-form registration-form--small" action="/" method="post">
                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                        <div class="registration-form__fields">
                            <div class="registration-form__field">
                                <input type="text" name="Applications[name]" id="name" class="registration-form__elem name" required="" autocomplete="off" minlength="2" placeholder="Введите ваше имя">
                            </div>
                            <div class="registration-form__field">
                                <input type="tel" name="Applications[phone]" id="phone" class="registration-form__elem phone" required="" autocomplete="off" placeholder="Введите ваш телефон">
                            </div>
                            <div class="registration-form__field">
                                <input type="email" name="Applications[email]" id="email" class="registration-form__elem email" required="" autocomplete="off" placeholder="Введите ваш email">
                            </div>
                            <div class="registration-form__field">
                                <button type="submit" class="registration-form__button">Отправить заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if($banner && $banner->advantages) : ?>
    <section class="advantages">
        <div class="container">
            <div class="advantages__row section-row">
                <?= $banner->advantages; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
