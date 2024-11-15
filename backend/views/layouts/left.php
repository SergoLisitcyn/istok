
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
                ],
            ]
        ) ?>

    </section>

</aside>
