<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use app\models\Product;
use yii\widgets\ActiveForm;
use yii\grid\GridView; 
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Products */
$product = Product::find()->where(['products_id' => $_GET['id']])->asArray()->one();
$this->title = $model->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <?php if (Yii::$app->session->hasFlash('mailerFormSubmitted')): ?>
	<div class="alert alert-success">
            Благодарим вас за выбор нашего отеля. Оригинал подтверждения бронирования отправлен на указанный вами электронный адрес: 
        </div>
        <?php else: ?>
</div>
<div class="container">
	<div class="product-wrapper">
		<div class="product-wrapper-element">
			<div class="product-wrapper-element-name">
				<h5><?php echo $product['name'];?></h5>
			</div>
			<div class="product-wrapper-element-images">
				<img src="<?php echo $product['img'];?>">
			</div>
			<div class="product-wrapper-element-description">
				<h5><?php echo $product['description'];?></h5>
			</div>
		
			
		</div>
	</div>
</div>
	<div class="product-wrapper-element-description">

			<?php echo $booking['fromName'];?>
			<?php echo $booking['famil'];?>
			<?php echo $booking['phone'];?>
			</div>
<div class="productst-form">
   <?php $form = ActiveForm::begin(); ?>

	    <?= $form->field($model, 'fromName')->textInput() ?>      
	    <?= $form->field($model, 'famil')->textInput() ?>      
	    <?= $form->field($model, 'otchestvo')->textInput() ?>      
	    <?= $form->field($model, 'phone')->textInput() ?>       
     <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
	    <?php ActiveForm::end(); ?>
</div>
	<div class="">
		<?php 
		echo '<label>Выберити дату заезда</label>';
		echo DatePicker::widget([
			'name' => 'datetime_10',
			'language' => 'ru',
			'type' => DatePicker::TYPE_INPUT,
			'convertFormat' => true,
				'pluginOptions' => [
					'format' => 'dd.MM.yyyy ',
					'autoclose'=>true,
					'weekStart'=>1, 
					'todayHighlight' => true,
					'startDate' => '01.01.2019 00:00', 
					'todayBtn'=>true,
				]
			]);
		?>
		</div>
			<div class="">
		<?php 
		echo '<label>Выберити дату отъезда</label>';
		echo DatePicker::widget([
			'name' => 'datetime_10',
			'language' => 'ru',
			'type' => DatePicker::TYPE_INPUT,
			'convertFormat' => true,
				'pluginOptions' => [
					'format' => 'dd.MM.yyyy ',
					'autoclose'=>true,
					'weekStart'=>1, 
					'todayHighlight' => true,
					'startDate' => '01.01.2019 00:00', 
					'todayBtn'=>true,
				]
			]);
		?>
		</div>
	
    <?php endif; ?>
</div>
</div>
