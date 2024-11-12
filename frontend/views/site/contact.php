<?php

/** @var yii\web\View $this */

use frontend\widgets\HeaderWidget;

$this->title = 'ИСК "Исток - Контакты';
$this->registerMetaTag(['name' => 'description','content' => '«Исток» – инженерно-строительная компания с большим опытом возведения коммерческих и жилых объектов: от «коробки» до отделочных работ']);

?>
<section class="contacts-heading heading">
    <div class="container">
        <div class="heading__row">
            <h1 class="heading__title">Контакты</h1>
        </div>
    </div>
</section>

<section class="contacts">
    <div class="container">
        <div class="contacts__row section-row">
            <p class="contacts__descr section-descr">«Исток» – это известная инженерно-строительная компания, которая придерживается требований законодательства РФ. Мы открыты к сотрудничеству.</p>
            <div class="contacts__columns uni-columns uni-columns-margin">
                <div class="uni-columns__columns">
                    <div class="uni-columns__col">
                        <div class="uni-columns__title">Вы можете связаться с нами по телефону или электронной почте, чтобы:</div>
                        <ul class="uni-columns__list uni-list">
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">получить дополнительную информацию о нашей работе;</p>
                            </li>
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">заказать профессиональную консультацию;</p>
                            </li>
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">узнать об открытых вакансиях и условиях трудоустройства;</p>
                            </li>
                            <li class="uni-list__item">
                                <div class="uni-list__image">
                                    <img src="img/check.svg" alt="Check">
                                </div>
                                <p class="uni-list__text">задать любой вопрос о сотрудничестве с нами.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="uni-columns__col uni-columns__col--image">
                        <img class="uni-columns__image" src="img/contacts.jpg" alt="Contacts">
                    </div>
                </div>
            </div>
            <div class="uni-image--mobile"></div>
            <p class="contacts__postscript uni-postscript uni-postscript-margin uni-postscript--accent">
                Наши сотрудники ответят на вопросы и предоставят все интересующие вас данные.
            </p>
            <?= HeaderWidget::widget(['type' => 'contacts']) ?>
        </div>
    </div>
</section>
