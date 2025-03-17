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
    <meta name="yandex-verification" content="687f208f2d28caf2" />
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
