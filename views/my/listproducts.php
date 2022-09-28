<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\Categories;
use app\models\Products;
use yii\helpers\Url;

$this->title = 'Гостиничные номера';
?>

<?php if(!empty($products_array)): ?>
	<?php $i = 0; foreach ( $products_array as $product) : ?>
		<?php $mainImg = $product->getImage(); ?>
			<div class="container">
				<div class="listproducts-wrapper">
					<div class="listproducts-element">
						<div class="listproducts-element-images">
						<a href="<?=Url::toRoute(['my/product', 'id' => $product['id']]);?>"><?= Html::img($mainImg->getUrl('300x200'), ['alt' => ''])?></a>
						</div>
						<div class="listproducts-element-name">
						<a href="<?=Url::toRoute(['my/product', 'id' => $product['id']]);?>"><?= $product->name ?></a>
						</div>
						<p class="listproducts-element-price">
						<i class="fa fa-rub" aria-hidden="true" style="font-size: 25px; color: #d98200; display: block; position: relative; top: 5px;"></i>
						<?= $product->price ?>
						</p>
						<div class="listproducts-element-description">
						<?= $product->description ?></a>
						</div>
						<div class="listproducts-element-button">
						<a href="<?=Url::to(['/booking/create', 'id' => $product['id']]);?>">Забронировать</a>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
<? endif; ?>