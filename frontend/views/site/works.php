<?php
if(!empty($data->title_seo)) { $this->title = $data->title_seo; }
if(!empty($data->description)) { $this->registerMetaTag(['name' => 'description','content' => $data->description]); }

$titleH1 = $data->name;
if(!empty($data->title)) {
    $titleH1 = $data->title;
}
?>
<section class="works-heading heading">
    <div class="container">
        <div class="heading__row">
            <h1 class="heading__title"><?= $titleH1 ?></h1>
        </div>
    </div>
</section>
<?php if($data->content) : ?>
<section class="works">
    <div class="container">
        <div class="works__row class-row-works section-row">
            <?= $data->content ?>
        </div>
    </div>
</section>
<?php endif; ?>