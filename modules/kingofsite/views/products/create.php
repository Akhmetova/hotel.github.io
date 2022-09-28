<?php

use yii\helpers\Html;



$this->title = 'Добавить гостиничный номер';
$this->params['breadcrumbs'][] = ['label' => 'Гостиничные номера', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<link href="/assets/312407e5/css/font-awesome.min.css" rel="stylesheet">
<link href="/assets/77a3ff03/css/bootstrap.css" rel="stylesheet">
<link href="/assets/8d863ad6/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/AdminLTE.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/skins/_all-skins.min.css" rel="stylesheet">
<link href="/assets/8d863ad6/css/style.css" rel="stylesheet">
<div class="products-create">
 <h3><?= Html::encode($this->title) ?></h3> 
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<div class="leftside-left">
    <?= $this->render('leftside.php', ['baserUrl' => $baseUrl]) ?>
</div>