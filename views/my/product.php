<?php


use yii\helpers\Html;
use yii\helpers\Url;
use yii\debug;
use app\models\Products;
$this->title = $product['name'];

?>

<?php
$mainImg = $product->getImage();
$gallery = $product->getImages();
?>

<div class="container">
	<div class="product-wrapper">
		<div class="product-wrapper-element">
			<div class="product-wrapper-element-name">
				<h3><?php echo $product['name'];?></h3>
			</div>
			<div id="similar-product" class="carousel-slide">
				<div class="carousel-inner">
					<?php $count = count($gallery); 
						$i = 0; 
					foreach($gallery as $img):?>
					<?php if($i % 4 ==0):?>
						<div class="item <?php if($i ==0) echo 'active'?>">
						<?php endif;?>
							<a href=""><?= Html::img($img->getUrl('250x250'), ['alt' => ''])?></a>
							<?php $i++; if($i % 4 ==0 || $i == $count):?>
						</div>
						<?php endif;?>
					<?php endforeach;?>
				</div>
			</div>
			
			<div class="product-wrapper-element-description">
				<h4><?php echo $product['description'];?></h4>
			</div>
			<div class="listproducts-element-button">
			<a href="<?=Url::to(['/booking/create', 'id' => $product['id']]);?>">Забронировать</a>
			</div>
		</div>
	</div>
</div>