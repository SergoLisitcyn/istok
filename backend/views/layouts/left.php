
<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Настройки', 'icon' => 'home', 'url' => ['/settings/update?id=1']],
                    ['label' => 'Главная страница', 'icon' => 'tasks', 'url' => ['/banners/update?id=1']],
                    [
                        'label' => 'Второстепенные страницы',
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
                    ['label' => 'Виды работ', 'icon' => 'reorder', 'url' => ['/services']],
                    ['label' => 'Подкатегории', 'icon' => 'picture-o', 'url' => ['/category']],
                    [
                        'label' => 'Заявки',
                        'icon' => 'address-card',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Заявки на консультацию', 'icon' => 'circle-o', 'url' => ['/applications'],],
                            ['label' => 'Заказать звонок', 'icon' => 'circle-o', 'url' => ['/feedback/call'],],
                            ['label' => 'Ответы на вопросы', 'icon' => 'circle-o', 'url' => ['/feedback'],],
                            ['label' => 'Резюме', 'icon' => 'circle-o', 'url' => ['/feedback/vacancy'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
