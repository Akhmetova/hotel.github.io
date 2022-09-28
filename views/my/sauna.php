<?php


/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use app\models\Sauna;
use yii\helpers\Url;
use yii\debug;

$this->title = $sauna['name'];
?>
<?php
$mainImg = $sauna->getImage();
$gallery = $sauna->getImages();

?>

<div class="container">
<div class="product-wrapper-element-description">
<h3><?php echo $sauna['description'];?></h3>
</div>
<div id="similar-product">
	<div class="carousel-inner">
		<?php 
			$count = count($gallery); 
			$i = 0; 
			foreach($gallery as $img):
		?>
		<?php if($i % 4 ==0):?>
		<div class="item <?php if($i ==0) echo 'active'?>">
			<?php endif;?>
			<a href="">
				<?= Html::img($img->getUrl('250x250'), ['alt' => ''])?>
			</a>
			<?php $i++; 
			if($i % 4 ==0 || $i == $count):
			?>
		</div>
		<?php endif;?>
		<?php endforeach;?>
	</div>

</div>

</div>

