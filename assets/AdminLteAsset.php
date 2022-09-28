<?php
namespace app\assets;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLteAsset extends AssetBundle
{	
	
    public $sourcePath = '@vendor/bower/adminlte/dist';
    public $css = [
        'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
        'css/style.css',
		'css/nivo-lightbox.css',
        'css/nivo_themes/default/default.css',
    ];
    public $js = [
        'plugins/fastclick/fastclick.min.js',
        'js/app.min.js',
        'plugins/sparkline/jquery.sparkline.min.js',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/chartjs/Chart.min.js',
		'web/js/jquery.js',
		'web/js/bootstrap.min.js',
		'web/js/jquery.scrollUp.min.js',
		'web/js/price-range.js',
		'web/js/jquery.prettyPhoto.js',
		'web/js/jquery.cookie.js',
		'web/js/jquery.accordion.js',
		'web/js/main.js',

		'web/js/first.js',
		'web/js/scr1.js',
		'web/js/tree.js',
		'web/js/four.js',
		'web/js/exceptions.js',
		'web/js/magnific.previewer.js',
		'web/js/product_image_gallery.js',
		'web/js/cloudzoom.js',
		
        //'js/pages/dashboard2.js',
    ];
    public $depends = [
        'app\assets\FontawesomeAsset',
		'yii\web\YiiAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @var string|bool Choose skin color, eg. `'skin-blue'` or set `false` to disable skin loading
     * @see https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#layout
     */
    public $skin = '_all-skins';

    /**
     * @inheritdoc
     */
    public function init()
    {
        // Append skin color file if specified
        if ($this->skin) {
            if (('_all-skins' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
                throw new Exception('Invalid skin specified');
            }

            $this->css[] = sprintf('css/skins/%s.min.css', $this->skin);
        }

        parent::init();
    }
}
