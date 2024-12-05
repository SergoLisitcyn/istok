<?php

/** @var yii\web\View $this */

use frontend\widgets\HeaderWidget;

if(!empty($data->title_seo)) { $this->title = $data->title_seo; }
if(!empty($data->description)) { $this->registerMetaTag(['name' => 'description','content' => $data->description]); }
$titleH1 = $data->name;
if(!empty($data->title)) {
    $titleH1 = $data->title;
}
?>
<section class="contacts-heading heading">
    <div class="container">
        <div class="heading__row">
            <h1 class="heading__title"><?= $titleH1 ?></h1>
        </div>
    </div>
</section>

<section class="contacts">
    <div class="container">
        <div class="contacts__row section-row">
            <?php if($data->content) : ?>
                <?= $data->content ?>
            <?php endif; ?>
            <div class="uni-image--mobile"></div>
            <p class="contacts__postscript uni-postscript uni-postscript-margin uni-postscript--accent">
                Наши сотрудники ответят на вопросы и предоставят все интересующие вас данные.
            </p>
            <?= HeaderWidget::widget(['type' => 'contacts']) ?>
        </div>
    </div>
</section>
