<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
$this->title = 'Гостиничные номера';
$this->params['breadcrumbs'][] = $this->title;

?>
<link href="/assets/312407e5/css/font-awesome.min.css" rel="stylesheet">
<link href="/assets/77a3ff03/css/bootstrap.css" rel="stylesheet">
<link href="/assets/8d863ad6/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/AdminLTE.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/skins/_all-skins.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/style.css" rel="stylesheet">
<div class="products-index">
 <p><?= Html::encode($this->title) ?></p>
    <p>
        <?= Html::a('Добавить гостиничный номер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
		'tableOptions' => [
            'class' => 'table table-striped table-bordered'
        ],
		'summary' => "Показаны номера {begin} - {end} из {totalCount} ",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			
            'category',
            'name',
			'description:ntext',
			
            
            //'price',
			//'description:ntext',
			//'id',
            //'visible',
            //'products_id',
            //'from_date',
			//'img' => [
            //'label' => 'Картинка',
           // 'format' => 'raw',
            //'value' => function($data){
            //    return Html::img(Url::toRoute($data->img),[
             //       'alt'=>'yii2 - картинка в gridview',
            //        'style' => 'width:200px;'
            //    ]);
			//	},
			//],
			//

			[
            'class' => 'yii\grid\ActionColumn',
            'header'=>'Действия', 
            'headerOptions' => ['width' => '80'],
            'template' => '{view} {update} {delete}{link}',
			],
			
        ],
    ]); ?>
</div>
<div class="leftside-left">
    <?= $this->render('leftside.php', ['baserUrl' => $baseUrl]) ?>
</div>