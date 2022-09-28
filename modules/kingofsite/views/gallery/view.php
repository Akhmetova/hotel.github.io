<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\kingofsite\models\Gallery */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Слайдер', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<link href="/assets/312407e5/css/font-awesome.min.css" rel="stylesheet">
<link href="/assets/77a3ff03/css/bootstrap.css" rel="stylesheet">
<link href="/assets/8d863ad6/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/AdminLTE.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/skins/_all-skins.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/style.css" rel="stylesheet">
<div class="gallery-view">



    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
	
	
	<?php $gallery = $model->getImages(); ?>
	
<div class="row">
	<div class="well col-lg-12">
		<div class="row" id="gallery">
			<?php foreach ($gallery as $img): ?>
				<div class="col-lg-4">
					<a href="<?= Url::to([$img->getUrl()])?>" data-lightbox-gallery="zenda-gallery" class="thumbnail"><?= Html::img($img->getUrl('268x249'), ['alt' => $model->text])?></a>
				</div>
			
			<?php endforeach;?>
		</div>
	</div>

</div>
	
	
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           
            'text',
			/* 'id',*/
        ],
    ]) ?>

</div>
<div class="leftside">
    <?= $this->render('leftside.php', ['baserUrl' => $baseUrl]) ?>
</div>