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
<section class="principles">
    <div class="container">
        <div class="principles__row section-row">
            <h2 class="principles__title section-title">Наши принципы</h2>
            <div class="principles__lists">
                <ul class="principles__list principles-list">
                    <li class="principles-list__item">
                        <div class="principles-list__image">
                            <img src="img/principles/principles-1.svg" alt="Principles">
                        </div>
                        <p class="principles-list__text">Учитываем пожелания заказчика при разработке техзадания</p>
                    </li>
                    <li class="principles-list__item">
                        <div class="principles-list__image">
                            <img src="img/principles/principles-2.svg" alt="Principles">
                        </div>
                        <p class="principles-list__text">Используем рациональный подход к составлению сметы</p>
                    </li>
                    <li class="principles-list__item">
                        <div class="principles-list__image">
                            <img src="img/principles/principles-3.svg" alt="Principles">
                        </div>
                        <p class="principles-list__text">Соблюдаем действующие ГОСТы</p>
                    </li>
                    <li class="principles-list__item">
                        <div class="principles-list__image">
                            <img src="img/principles/principles-4.svg" alt="Principles">
                        </div>
                        <p class="principles-list__text">Проводим добросовестный технический надзор на каждом этапе проекта.</p>
                    </li>
                </ul>
                <ul class="principles__list principles-list">
                    <li class="principles-list__item">
                        <div class="principles-list__image">
                            <img src="img/principles/principles-5.svg" alt="Principles">
                        </div>
                        <p class="principles-list__text">Используем проверенные технологии, материалы и оборудование</p>
                    </li>
                    <li class="principles-list__item">
                        <div class="principles-list__image">
                            <img src="img/principles/principles-6.svg" alt="Principles">
                        </div>
                        <p class="principles-list__text">Соблюдаем оговоренные сроки выполнения работ</p>
                    </li>
                    <li class="principles-list__item">
                        <div class="principles-list__image">
                            <img src="img/principles/principles-7.svg" alt="Principles">
                        </div>
                        <p class="principles-list__text">Проконтролируем качество используемых материалов и результаты выполненных работ на каждом этапе реализации проекта</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

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

<section class="advantages">
    <div class="container">
        <div class="advantages__row section-row">
            <h2 class="advantages__title section-title">Преимущества работы с нами</h2>
            <p class="advantages__descr section-descr">В ходе реализации проекта мы берем на себя управление всеми процессами на строительной площадке. Спектр услуг включает контроль над количеством и качеством материалов, договоренности с поставщиками, использование специального оборудования и техники, привлечение профильных специалистов. Мы умеем рационально использовать ресурсы, а потому не допускаем излишков и не превышаем смету.</p>
            <div class="advantages__columns uni-columns uni-columns-margin">
                <div class="uni-columns__columns">
                    <div class="uni-columns__col">
                        <div class="uni-columns__title">Стремясь к комфортному и долгосрочному сотрудничеству с заказчиками, компания «Исток»:</div>
                        <ul class="uni-columns__list uni-list">
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">Заключает договоры, в которых четко обозначены права и обязанности сторон, сроки выполнения работ, правила расчетов и другие особенности реализации проекта. Мы добросовестно придерживаемся всех условий контракта.</p>
                            </li>
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">Держим клиентов в курсе всех этапов строительства. Работаем открыто и честно, а потому предоставляем полную информацию о ходе выполнения заказа.</p>
                            </li>
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">Применяем только проверенные технологии, оборудование и материалы.</p>
                            </li>
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">Придерживаемся принципов экологической безопасности и энергоэффективности строительства.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="uni-columns__col uni-columns__col--image">
                        <img class="uni-columns__image" src="img/advantages.jpg" alt="Advantages">
                    </div>
                </div>
            </div>
            <div class="uni-image--mobile"></div>
            <p class="advantages__postscript uni-postscript uni-postscript-margin uni-postscript--accent">«Исток» – это надежный и ответственный партнер, который выполняет свои обязательства.
                Мы ценим наших клиентов и свою репутацию.</p>
        </div>
    </div>
</section>
