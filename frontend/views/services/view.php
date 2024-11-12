<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Services $model */


if(!empty($model->title_seo)) { $this->title = $model->title_seo; }
if(!empty($model->description)) { $this->registerMetaTag(['name' => 'description','content' => $model->description]); }
$styleBanner = '';
if($model->banner){
    $styleBanner = 'background-image:'.$model->banner;
}

?>
<section class="finishing-heading heading" style="<?= $styleBanner ?>">
    <div class="container">
        <div class="heading__row">
            <h1 class="heading__title">Виды работ</h1>
        </div>
    </div>
    <?= $model->text; ?>
</section>
