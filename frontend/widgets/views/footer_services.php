<div class="footer-info__box">
    <div class="footer-info__title">Виды работ</div>
    <div class="footer-info__column">
        <ul class="footer-info__list footer-info-list">
            <?php foreach($services as $service) : ?>
            <li class="footer-info-list__item">
                <a href="/services/<?= $service->url ?>" class="footer-info-list__link"><?= $service->name ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>