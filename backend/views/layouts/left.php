
<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Настройки', 'icon' => 'home', 'url' => ['/settings/update?id=1']],
                    ['label' => 'Баннер', 'icon' => 'tasks', 'url' => ['/banners/update?id=1']],
                    ['label' => 'Заявки', 'icon' => 'file-o', 'url' => ['/applications']],
                    ['label' => 'Ответы на вопросы', 'icon' => 'question-circle', 'url' => ['/feedback']],
                    ['label' => 'Резюме', 'icon' => 'address-card', 'url' => ['/feedback/vacancy']],
                    ['label' => 'Виды работ', 'icon' => 'reorder', 'url' => ['/services']],
                    ['label' => 'Подкатегории', 'icon' => 'picture-o', 'url' => ['/category']],
                    [
                        'label' => 'Страницы',
                        'icon' => 'book',
                        'url' => '#',
                        'items' => [
                            ['label' => 'О компании', 'icon' => 'circle-o', 'url' => ['/pages/update?id=1'],],
                            ['label' => 'Наши работы', 'icon' => 'circle-o', 'url' => ['/pages/update?id=2'],],
                            ['label' => 'Вакансии', 'icon' => 'circle-o', 'url' => ['/pages/update?id=3'],],
                            ['label' => 'Контакты', 'icon' => 'circle-o', 'url' => ['/pages/update?id=4'],],
                            ['label' => 'Политика конфиденциальности', 'icon' => 'circle-o', 'url' => ['/pages/update?id=5'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
