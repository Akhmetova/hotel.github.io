<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use appo\models\Categories;
use yii\helpers\Url;

$this->title = 'Номерной фонд';
?>
<div class="container">
	<div class="content-numbers-wrapper">
		<div class="numbers-wrapper-element">
			<div class="universal">
				<?php foreach ($categories as $category):?>
					<div class="numbers-wrapper-element-images">
						<a href="<?=Url::toRoute(['my/listproducts', 'id' => $category['id']]);?>">
							<img src="<?php echo $category['img'];?>">
						<div class="numbers-wrapper-element-name">
							<?php echo $category['name'];?>
						</div>
						</a>
						<div class="clearfix"></div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</div>