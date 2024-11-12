
<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Настройки', 'icon' => 'home', 'url' => ['/settings/update?id=1']],
                    ['label' => 'Баннер', 'icon' => 'tasks', 'url' => ['/banners/update?id=1']],
                    ['label' => 'Заявки', 'icon' => 'file-o', 'url' => ['/applications']],
                    ['label' => 'Виды работ', 'icon' => 'reorder', 'url' => ['/services']],
                ],
            ]
        ) ?>

    </section>

</aside>
