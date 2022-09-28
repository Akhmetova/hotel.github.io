<?php
use yii\widgets\Breadcrumbs;



/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
//use app\assets\AppAsset;
use app\assets\AdminLteAsset;

//AppAsset::register($this);
$asset      = AdminLteAsset::register($this);
$baseUrl    = $asset->baseUrl;


?>
<?php $this->beginPage() ?>
<body class="hold-transition skin-blue sidebar-mini">
	 <!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		

			<?=
			Breadcrumbs::widget([
				'homeLink' => ['label' => 'Главная', 'url' => '/kingofsite'],
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],

			]) ?>
        </section>

        <!-- Main content -->
        <section class="content">
			<?= $content ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->endBody() ?>
</body>
<?php $this->endPage() ?>