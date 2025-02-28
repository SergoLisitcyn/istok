<?php

use common\models\Services;

$category = Services::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
$string = '';
foreach ($category as $value){
    $string.= '<li><a href="/admin/category?id='.$value['id'].'"><i class="fa fa-circle-o"></i><span>'.$value['name'].'</span></a></li>';
}
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Настройки', 'icon' => 'home', 'url' => ['/settings/update?id=1']],
                    ['label' => 'Главная страница', 'icon' => 'tasks', 'url' => ['/banners/update?id=1']],
                    ['label' => 'Галерея «Наши работы»', 'icon' => 'image', 'url' => ['/gallery']],
                    [
                        'label' => 'Второстепенные страницы',
                        'icon' => 'book',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Виды работ', 'icon' => 'circle-o', 'url' => ['/pages/update?id=6'],],
                            ['label' => 'О компании', 'icon' => 'circle-o', 'url' => ['/pages/update?id=1'],],
                            ['label' => 'Наши работы', 'icon' => 'circle-o', 'url' => ['/pages/update?id=2'],],
                            ['label' => 'Вакансии', 'icon' => 'circle-o', 'url' => ['/pages/update?id=3'],],
                            ['label' => 'Контакты', 'icon' => 'circle-o', 'url' => ['/pages/update?id=4'],],
                            ['label' => 'Политика конфиденциальности', 'icon' => 'circle-o', 'url' => ['/pages/update?id=5'],],
                        ],
                    ],
                    ['label' => 'Виды работ', 'icon' => 'reorder', 'url' => ['/services']],
                    ['label' => 'Подкатегории', 'icon' => 'clone', 'url' => ['/category'],'template' => '<li class="treeview"><a href="#">
<i class="fa fa-clone"></i>  <span>Подкатегории</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
    <ul class="treeview-menu">'.$string.'</ul>
</li>'],
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
