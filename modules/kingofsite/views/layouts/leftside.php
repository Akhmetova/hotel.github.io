<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
<?= Html::img('@web/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-left info">
                <p>Администратор</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Меню', 'options' => ['class' => 'header']],
                        ['label' => 'Перейти на главную страницу сайта', 'icon' => 'fa fa-dashboard', 
                            'url' => ['/'], 'active' => $this->context->route == 'site/index'
                        ],
                        [
                            'label' => 'Виджеты',
                            'icon' => 'fa fa-paint-brush',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => 'Галерея',
                                    'icon' => 'fa fa-file-image-o',
									'url' => ['/admin/gallery'],
									'active' => $this->context->route == '/web/admin/gallery',
                                ],
                                
                            ]
                        ],
						  [
                            'label' => 'Категории страниц',
                            'icon' => 'fa fa-files-o',
                            'url' => ['/admin/categories'],
                            'active' => $this->context->route == '/web/admin/categories',
                        ],
                        [
                            'label' => 'Страницы',
                            'icon' => 'fa fa-files-o',
                            'url' => ['/admin/products'],
                            'active' => $this->context->route == '/web/admin/products',
                        ],
						
						  [
                            'label' => 'База данных',
                            'icon' => 'fa fa-database',
                            'url' => 'https://violet.timeweb.ru/pma/db_structure.php?server=1&db=hotel89_ru&token=2bdd6f76ea60544a01bea9e38d78186a',
                            
                        ],
						
						[
                            'label' => 'Хостинг',
                            'icon' => 'fa fa-chevron-right',
                            'url' => 'https://hosting.timeweb.ru',
                            
                        ],
						
						
                        ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                    ],
                ]
        )
        ?>
        
    </section>
    <!-- /.sidebar -->
</aside>
