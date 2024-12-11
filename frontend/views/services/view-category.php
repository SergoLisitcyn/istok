<?php
if(!empty($model->title_seo)) { $this->title = $model->title_seo; }
if(!empty($model->description)) { $this->registerMetaTag(['name' => 'description','content' => $model->description]); }

$titleH1 = $model->name;
if(!empty($model->title)) {
    $titleH1 = $model->title;
}
$styleBanner = '';
if($service->banner){
    $styleBanner = 'background-image:url('.$service->banner.')';
}

$breadcrumbs = $service->name;
if($service->breadcrumbs){
    $breadcrumbs = $service->breadcrumbs;
}
?>

    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__items">
                <li class="breadcrumbs__item">
                    <a href="/services" class="breadcrumbs__link">Виды работ</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="/services/<?= $service->url ?>" class="breadcrumbs__link"><?= $breadcrumbs ?></a>
                </li>
                <li class="breadcrumbs__item">
                    <?= $model->name ?>
                </li>
            </ul>
        </div>
    </div>
    <section class="works-heading heading" style="<?= $styleBanner ?>">
        <div class="container">
            <div class="heading__row">
                <h1 class="heading__title"><?= $titleH1 ?></h1>
            </div>
        </div>
    </section>
<?php if($model->content) : ?>
    <section class="works">
        <div class="container">
            <div class="works__row class-row-works section-row">
                <?= $model->content ?>
            </div>
        </div>
    </section>
<?php endif; ?>