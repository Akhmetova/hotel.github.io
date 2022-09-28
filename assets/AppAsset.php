<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/nivo-lightbox.css',
        'css/nivo_themes/default/default.css',
		'css/style.css',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
		'plugins/2015/bootstrap3/bootstrap.min.css',
		'plugins/font-awesome/4-4-0/font-awesome.min.css',
		'plugins/jquery/jquery-1.11.3.min.js',
		'plugins/2015/bootstrap3/bootstrap.min.css',
		'http://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css',
		'http://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css',
		
		
    ];
    public $js = [
		'ckeditor.js',
		'js/slider.js',
		'js/menu.js',
		'js/jquery-1.10.2.min.js',
		'js/jquery.glide.min.js',
		
		
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
