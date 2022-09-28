<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Products */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Гостиничные номера', 'url' => ['products/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="/assets/312407e5/css/font-awesome.min.css" rel="stylesheet">
<link href="/assets/77a3ff03/css/bootstrap.css" rel="stylesheet">
<link href="/assets/8d863ad6/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/AdminLTE.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/skins/_all-skins.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/style.css" rel="stylesheet">
<div class="products-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
	<?php $img = $model->getImage(); ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'category',
            'name',
			   [
				'attribute' => 'image',
				'value' => "<img src='{$img->getUrl('350x250')}'>",
				
				'format' => 'raw',
			   ],
            'description:ntext',
            'price',
			 'visible',
			/*
			'id',
            'visible',
            'products_id',
            'from_date',
			*/
        ],
    ]) ?>

</div>
<div class="leftside">
    <?= $this->render('leftside.php', ['baserUrl' => $baseUrl]) ?>
</div>