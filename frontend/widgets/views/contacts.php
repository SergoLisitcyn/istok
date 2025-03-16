<div class="contacts__links contacts-links">
    <div class="contacts-links__box connect-box connect-box--accent">
        <?php if($settings->phone) : ?>
        <div class="connect-box__item">
            <div class="connect-box__icon">
                <svg width="32.000000" height="32.017334" viewBox="0 0 32 32.0173" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs/>
                    <path id="Vector" d="M4.82 3.41C5.65 2.67 6.83 1.35 8.11 1.5C9.45 1.65 10.41 3.03 11.08 4.01C12.23 5.68 14.08 8.13 12.39 10.02C11.56 10.91 10.28 11.39 9.54 12.35C8.78 13.33 9.22 14.62 9.77 15.63C10.95 17.87 12.99 19.99 15.04 21.58C15.96 22.26 17.21 23.13 18.45 22.92C19.76 22.71 20.75 21.37 21.74 20.65C24.2 18.8 26.89 21.34 28.71 22.83C29.54 23.55 30.53 24.47 30.49 25.61C30.43 26.77 28.83 27.73 27.94 28.42C25.54 30.27 22.54 30.87 19.54 30.27C16.28 29.64 13.54 27.82 11.08 25.79C8.55 23.73 6.45 21.25 4.62 18.65C3.76 17.42 3.03 16.17 2.49 14.8C1.91 13.33 1.72 11.87 1.5 10.31C1.53 7.6 2.71 5.24 4.82 3.41Z" stroke="#19958E" stroke-opacity="1.000000" stroke-width="3.000000" stroke-linejoin="round"/>
                </svg>
            </div>
            <a href="tel:<?= $settings->phone ?>" class="connect-box__link"><?= $settings->phone ?></a>
        </div>
        <?php endif; ?>
        <?php if($settings->email) : ?>
        <div class="connect-box__item">
            <div class="connect-box__icon">
                <svg width="33.857422" height="27.000000" viewBox="0 0 33.8574 27" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs/>
                    <path id="Vector" d="M4.07 4.07L13.68 11.12L13.68 11.12L16.92 13.5L20.17 11.12L29.78 4.07M1.5 6.98C1.5 5.06 1.5 4.1 1.87 3.37C2.2 2.72 2.72 2.2 3.37 1.87C4.1 1.5 5.06 1.5 6.98 1.5L26.87 1.5C28.79 1.5 29.75 1.5 30.48 1.87C31.12 2.2 31.65 2.72 31.98 3.37C32.35 4.1 32.35 5.06 32.35 6.98L32.35 20.02C32.35 21.93 32.35 22.89 31.98 23.62C31.65 24.27 31.12 24.79 30.48 25.12C29.75 25.5 28.79 25.5 26.87 25.5L6.98 25.5C5.06 25.5 4.1 25.5 3.37 25.12C2.72 24.79 2.2 24.27 1.87 23.62C1.5 22.89 1.5 21.93 1.5 20.01L1.5 6.98Z" stroke="#0A847E" stroke-opacity="1.000000" stroke-width="3.000000" stroke-linecap="square"/>
                </svg>
            </div>
            <a href="mailto:<?= $settings->email ?>" class="connect-box__link"><?= $settings->email ?></a>
        </div>
        <?php endif; ?>
        <?php if($settings->address) : ?>
            <div class="connect-box__item">
                <span class="connect-box__link"><?= $settings->address ?></span>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php if($settings->maps) : ?>
    <div class="contacts__map contacts-map">
        <?= $settings->maps ?>
<!--        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ace98d84703d79fe9963c3ccb1b369533232c8c298574b70d005a37963a61146e&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>-->
    </div>
<?php endif; ?>
