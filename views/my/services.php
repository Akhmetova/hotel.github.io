<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\Categories;
use common\models\Product;
use common\models\Products;
use yii\helpers\Url;

$this->title = 'Дополнительные услуги';
?>
<?php
$mainImg = $services->getImage();
$gallery = $services->getImages();
/*debug($mainImg);*/
?>

	<div class="container">
		<div class="services-wrapper">
			<div class="services-element">
			
				<div id="similar-product" class="carousel-slide">
				<div class="carousel-inner">
					<?php $count = count($gallery); 
						$i = 0; 
					foreach($gallery as $img):?>
					<?php if($i % 4 ==0):?>
						<div class="item <?php if($i ==0) echo 'active'?>">
						<?php endif;?>
						
							<a href=""><?= Html::img($img->getUrl('250x250'), ['alt' => $product->name])?></a>
							<?php $i++; if($i % 4 ==0 || $i == $count):?>
						</div>
						<?php endif;?>
						
					<?php endforeach;?>
				
			
				</div>
				
			</div>
				 
				
		
		
		</div>
		</div>
		
	
	</div>
