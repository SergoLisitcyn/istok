<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use frontend\widgets\HeaderWidget;
use yii\bootstrap4\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?= HeaderWidget::widget(['type' => 'analytics']) ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<?php if( Yii::$app->session->hasFlash('successReviews') ): ?>
    <div class="alert alert-success alert-dismissible alert-main-page" role="alert">
        <button type="button" class="close-main-page" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('successReviews'); ?>
    </div>
<?php endif;?>
<?php if( Yii::$app->session->hasFlash('errors') ): ?>
    <div class="alert alert-warning alert-dismissible alert-main-page-danger" role="alert">
        <button type="button" class="close-main-page" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('errors'); ?>
    </div>
<?php endif;?>
<?= HeaderWidget::widget(['type' => 'header']) ?>

<main role="main" class="main">
        <?= Alert::widget() ?>
        <?= $content ?>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer__row">
            <div class="footer__columns">
                <div class="footer__col">
                    <a href="/" class="footer__logo logo">
                        <img src="/img/logo.svg" alt="Logo">
                    </a>
                    <p class="footer__descr">Инженерно-строительная компания «Исток» оказывает услуги по возведению жилой и коммерческой недвижимости. Мы реализуем проекты разного уровня сложности, разрабатывая индивидуальные решения для каждого объекта.</p>
                </div>
                <div class="footer__col">
                    <div class="footer__connect footer-connect">
                        <div class="footer-connect__title">Всегда на связи</div>
                        <div class="footer-connect__connect-box connect-box">
                            <div class="connect-box__item">
                                <div class="connect-box__icon">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7.08516C1.02203 5.21053 1.83698 3.58311 3.29069 2.3265C3.86336 1.81149 4.67832 0.905078 5.55935 1.00808C6.48444 1.11108 7.14522 2.05869 7.60776 2.7385C8.40069 3.89212 9.67819 5.58134 8.51082 6.87916C7.93815 7.49716 7.05711 7.82677 6.55052 8.48598C6.0219 9.16579 6.33026 10.0516 6.7047 10.752C7.51965 12.297 8.92931 13.7596 10.339 14.8515C10.9777 15.3253 11.8367 15.9227 12.6957 15.7785C13.5988 15.6343 14.2816 14.7073 14.9644 14.2129C16.6604 12.9356 18.5106 14.6867 19.766 15.7167C20.3387 16.2111 21.0215 16.8497 20.9995 17.6325C20.9554 18.4359 19.8541 19.0951 19.2374 19.5689C17.5855 20.8461 15.515 21.2581 13.4446 20.8461C11.198 20.4135 9.30375 19.1569 7.60776 17.7561C5.86772 16.3347 4.41401 14.6249 3.15853 12.8326C2.56384 11.988 2.05724 11.1228 1.6828 10.1752C1.28634 9.16579 1.15418 8.15637 1 7.08516ZM1 7.08516C1.02203 6.05514 1.0881 7.64137 1 7.08516Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <a href="tel:+74953637967" class="connect-box__link">+7 (495) 363-79-67</a>
                            </div>
                        </div>
                        <?= HeaderWidget::widget(['type' => 'footer_social']) ?>
                    </div>
                    <div class="footer__info footer-info">
                        <div class="footer-info__about">
                            <div class="footer-info__title">Главная</div>
                            <ul class="footer-info__list footer-info-list">
                                <li class="footer-info-list__item">
                                    <a href="/company" class="footer-info-list__link">О компании</a>
                                </li>
                                <li class="footer-info-list__item">
                                    <a href="/works" class="footer-info-list__link">Наши работы</a>
                                </li>
                                <li class="footer-info-list__item">
                                    <a href="/vacancy" class="footer-info-list__link">Вакансии</a>
                                </li>
                                <li class="footer-info-list__item">
                                    <a href="/contacts" class="footer-info-list__link">Контакты</a>
                                </li>
                                <li class="footer-info-list__item">
                                    <a href="/privacy" class="footer-info-list__link">Политика конфиденциальности</a>
                                </li>
                            </ul>
                        </div>
                        <?= HeaderWidget::widget(['type' => 'footer_services']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
