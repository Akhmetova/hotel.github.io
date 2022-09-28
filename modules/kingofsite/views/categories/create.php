<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Categories */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Категории гостиничных номеров', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="/assets/312407e5/css/font-awesome.min.css" rel="stylesheet">
<link href="/assets/77a3ff03/css/bootstrap.css" rel="stylesheet">
<link href="/assets/8d863ad6/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/AdminLTE.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/skins/_all-skins.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/style.css" rel="stylesheet">
<div class="categories-create">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
<div class="sadas">
    <?= $this->render('leftside.php', ['baserUrl' => $baseUrl]) ?>
</div>