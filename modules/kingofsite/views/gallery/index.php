<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider
 <p>
        <?= Html::a('Create Gallery', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
 */

$this->title = 'Слайдер на главной странице';
$this->params['breadcrumbs'][] = $this->title;
?>

<link href="/assets/312407e5/css/font-awesome.min.css" rel="stylesheet">
<link href="/assets/77a3ff03/css/bootstrap.css" rel="stylesheet">
<link href="/assets/8d863ad6/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/AdminLTE.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/skins/_all-skins.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/style.css" rel="stylesheet">
<div class="gallery-index">

    <h3><?= Html::encode($this->title) ?></h3>

   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
		'summary' => '',
		
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
				
           
            'text',
			/** 'id',*/
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