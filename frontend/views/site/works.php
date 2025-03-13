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
<?php if($arrayService) : ?>
<section class="filter">
    <div class="container">
        <ul class="filter__list">
            <?php foreach($arrayService as $service) : ?>
            <?php if($service['gallery'][0]['image']) : ?>
            <li class="filter__item">
                <a href="#gallery-section__title-<?= $service['service']->id ?>" class="filter__link"><?= $service['service']->name ?></a>
            </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php endif; ?>
<section class="gallery-section">
    <div class="container">
        <div class="gallery-section__row">
            <?php foreach($arrayService as $service) : ?>
            <?php if($service['gallery']) : ?>
            <?php foreach($service['gallery'] as $gallery) : ?>
                <?php if($gallery->image) : ?>
                <div class="gallery-section__box" id="gallery-section__title-<?= $service['service']->id ?>">
                    <div class="gallery-section__title"><?= $gallery->name ?></div>

                    <?php if($gallery->description) : ?>
                        <p class="gallery-section__descr"><?= $gallery->description ?></p>
                    <?php endif; ?>

                    <div class="gallery-section__slider gallery-slider">
                        <div class="swiper-container gallery-slider__container">
                            <div class="swiper-wrapper gallery-slider__wrapper">
                                <?php foreach($gallery->image as $detail) : ?>
                                    <div class="swiper-slide">
                                        <div class="gallery-slider__box">
                                            <img class="gallery-slider__img" src="<?= $detail['file'] ?>" alt="Gallery">
                                            <div class="gallery-slider__info">
                                                <a href="<?= $detail['file'] ?>" class="gallery-slider__link">
                                                    <img class="gallery-slider__icon" src="/img/photo.svg" alt="Photo">
                                                    <p class="gallery-slider__text">Открыть галерею</p>
                                                </a>
                                            </div>
                                        </div>
                                         <?php if($detail['desc']) : ?>
                                            <div class="gallery-slider__caption"><?= $detail['desc'] ?></div>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php if(count($gallery->image) > 1) : ?>
                            <div class="gallery-slider__nav">
                                <div class="prev-btn">
                                    <svg width="35.000000" height="35.000000" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <desc>
                                            Created with Pixso.
                                        </desc>
                                        <defs/>
                                        <circle id="Ellipse 1" r="16.500000" transform="matrix(-1 0 0 1 17.5 17.5)" stroke="#0A847E" stroke-opacity="1.000000" stroke-width="2.000000"/>
                                        <path id="Arrow-left" d="M13.41 16L17.36 12.05C17.75 11.65 17.75 11.03 17.36 10.63C16.96 10.24 16.34 10.24 15.95 10.63L10.29 16.29C9.89 16.68 9.89 17.31 10.29 17.7L15.95 23.36C16.34 23.75 16.96 23.75 17.36 23.36C17.75 22.96 17.75 22.34 17.36 21.94L13.41 18L24 18C24.55 18 25 17.56 25 17C25 16.43 24.55 16 24 16L13.41 16Z" fill="#0A847E" fill-opacity="1.000000" fill-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="next-btn">
                                    <svg width="35.000000" height="35.000000" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <desc>
                                            Created with Pixso.
                                        </desc>
                                        <defs/>
                                        <circle id="Ellipse 1" cx="17.500000" cy="17.500000" r="16.500000" stroke="#0A847E" stroke-opacity="1.000000" stroke-width="2.000000"/>
                                        <path id="Arrow-left" d="M21.58 16L17.63 12.05C17.24 11.65 17.24 11.03 17.63 10.63C18.03 10.24 18.65 10.24 19.04 10.63L24.7 16.29C25.1 16.68 25.1 17.31 24.7 17.7L19.04 23.36C18.65 23.75 18.03 23.75 17.63 23.36C17.24 22.96 17.24 22.34 17.63 21.94L21.58 18L11 18C10.44 18 10 17.56 10 17C10 16.43 10.44 16 11 16L21.58 16Z" fill="#0A847E" fill-opacity="1.000000" fill-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                    <?php endif; ?>
                        </div>
                    </div>
                </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
<!--            <div class="gallery-section__line"></div>-->
<!--            <div class="gallery-section__pagination pagination" page="1">-->
<!--                <a href="#!-1" class="pagination__i">-->
<!--                    <img class="pagination__icon" src="img/arrow-right.svg" alt="">-->
<!--                </a>-->
<!--                <a href="#!1" class="pagination__i">1</a>-->
<!--                <a href="#!2" class="pagination__i">2</a>-->
<!--                <a href="#!3" class="pagination__i">3</a>-->
<!--                <a href="#!4" class="pagination__i">4</a>-->
<!--                <a href="#!5" class="pagination__i">5</a>-->
<!--                <a href="#!5" class="pagination__i">6</a>-->
<!--                <a href="#!5" class="pagination__i">7</a>-->
<!--                <a href="#!5" class="pagination__i">8</a>-->
<!--                <a href="#!+1" class="pagination__i">-->
<!--                    <img class="pagination__icon" src="img/arrow-left.svg" alt="">-->
<!--                </a>-->
<!--            </div>-->
        </div>
    </div>
</section>
