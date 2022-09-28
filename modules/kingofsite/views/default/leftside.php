<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
<?= Html::img('@web/images/admin.jpg', ['class' => 'img-circle', 'alt' => 'User Image', 'style' => 'border-radius: 0!important;']) ?>
            </div>
            <div class="pull-left info">
                <p>Администратор</p>
            </div>
        </div>
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Главная страница сайта', 'icon' => 'fa fa-dashboard', 
                            'url' => ['/'], 'active' => $this->context->route == 'site/index'
                        ],
                                [
                                    'label' => 'Галерея',
                                    'icon' => 'fa fa-file-image-o',
									'url' => ['/kingofsite/gallery/'],
									'active' => $this->context->route == '/kingofsite/gallery',
                                ],
								[
									'label' => 'Категории страниц',
									'icon' => 'fa fa-files-o',
									'url' => ['/kingofsite/categories'],
									'active' => $this->context->route == '/kingofsite/categories',
								],
								[
									'label' => 'Страницы',
									'icon' => 'fa fa-files-o',
									'url' => ['/kingofsite/products'],
									'active' => $this->context->route == '/kingofsite/products',
								],
								[
									'label' => 'Список гостей',
									'icon' => 'fa fa-user',
									'url' => ['/kingofsite/booking'],
									'active' => $this->context->route == '/kingofsite/booking',
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
</aside>
