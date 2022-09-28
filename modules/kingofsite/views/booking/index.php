<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Products;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\kingofsite\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Инфомарция о гостях';
$this->params['breadcrumbs'][] = $this->title;

?>

<link href="/assets/312407e5/css/font-awesome.min.css" rel="stylesheet">
<link href="/assets/77a3ff03/css/bootstrap.css" rel="stylesheet">
<link href="/assets/8d863ad6/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/AdminLTE.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/skins/_all-skins.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/style.css" rel="stylesheet">
<div class="booking-index">

    <p><?= Html::encode($this->title) ?></p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'familiya',
            'name',
            'otchestvo',
            'phone',
			'name_nomer',
			['attribute' => 'created_at', 'format' => ['date', 'dd.MM.yyyy']],
			['attribute' => 'updated_at', 'format' => ['date', 'dd.MM.yyyy']],
			'price',
			[
               'attribute' => 'enforced',
              'value' => function($data) {
                  return !$data->enforced ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>';
              },
                'format' => 'html',
            ],
			//'id',
            //'updated_at',
            //'visible',
			'comment',
             [
            'class' => 'yii\grid\ActionColumn',
            'header'=>'Редактировать', 
			 'headerOptions' => ['width' => '10'],
            'template' => '{update} ',
        ],
        ],
    ]); ?>
</div>

<div class="leftside-left">
    <?= $this->render('leftside.php', ['baserUrl' => $baseUrl]) ?>
</div>

	       