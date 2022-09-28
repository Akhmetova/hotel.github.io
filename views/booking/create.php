<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use app\models\Products;
use yii\widgets\ActiveForm;
use yii\grid\GridView; 
use yii\jui\DatePicker;
use app\assets\AppAsset;
use yii\widgets\MaskedInput;
$this->title = 'Бронирование'; 
$product = Products::find()->where(['id' => $_GET['id']])->one();

AppAsset::register($this);
?>

<div class="productst-booking">
		<?php if (Yii::$app->session->hasFlash('mailerFormSubmitted')): ?>
		<div class="alert alert-success">
				Благодарим Вас за выбор нашего отеля.  
			</div>
		 <?php else: ?>
		 	<?php $form = ActiveForm::begin([  ]); ?>
			<div class="productst-wrapper">
				<div class="productst-element">
					<div class="productst-element-images">
					<?php if(!empty($product)): ?>
						<?php $mainImg = $product->getImage(); ?>
						<div class="listproducts-element-images" >
							<?= Html::img($mainImg->getUrl()) ?>
						</div>
						<? endif; ?>
					</div>
					<div class="productst-element-name">
						<?php echo $product['name'];?>
					</div>
				<div class="productst-element-price" style="font-size: 25px; color: #d98200; display: block; position: absolute; right: 35px;">
						<i class="fa fa-rub" aria-hidden="true" style="font-size: 25px; color: #d98200; display: block; position: relative; top: 5px;"></i>3500					</div>
					<div class="productst-element-description">
						<?php echo $product['description'];?>
					</div>
				</div>
			</div>
				<div class="productst-form">
					<div class="productst-form-name">
					<h3>Информация о клиенте</h3>
					</div>
			
				
					<?=$form->field($model, 'familiya')->textInput(array('placeholder' => 'Фамилия', 'class'=>'form-control text-center') ); ?>               
					<?= $form->field($model, 'name')->textInput(array('placeholder' => 'Имя', 'class'=>'form-control text-center')); ?>        
					<?= $form->field($model, 'otchestvo')->textInput(array('placeholder' => 'Отчество', 'class'=>'form-control text-center')); ?> 
					<?= $form->field($model, 'phone')->widget(yii\widgets\MaskedInput::class, [
						'name' => 'phone',
						'mask' => '+7(999)999-99-99',
						'options'=>[
								'class'=>'form-control text-center',
								'placeholder' => ('Ваш телнфон')
							],
					]) ?>
				</div>
		<div class="productst-date">
		<div class="productst-form-name-date">
					<h3>Информация по датам</h3>
		</div>
		
			<?= $form->field($model,'created_at')->widget(DatePicker::class, [
			
				'options' => ['placeholder' => 'Выберити дату заезда',],
				'language' => 'ru',
				'dateFormat' => 'dd.MM.yyyy',
				'clientOptions' => [
				'format' => 'dd.MM.yyyy',
				'todayHighlight' => true,
				'minDate' => '0d',
			]
			])->label(false) ?>
		
		<?= $form->field($model,'updated_at')->widget(DatePicker::class, [
				
				'options' => ['placeholder' => 'Выберити дату отъезда'],
				'language' => 'ru',
				'dateFormat' => 'dd.MM.yyyy',
				'clientOptions' => [
				'format' => 'dd.MM.yyyy',
				'todayHighlight' => true,
				'minDate' => '0d',
			]
		])->label(false) ?>
		<div class="productst-form-name-attention">
					<p>Обратите внимание!
					Регистрация заезда: с 12:00.
					Регистрация выезда: до 12:00.
					Варианты оплаты в отеле: Только наличные.</p>
		</div>
		</div>
		
		<div class="booking-comment">
			<?= $form->field($model, 'comment')->textarea(['placeholder' => 'Здесь Вы можете оставить Ваши пожелания, комментария','rows' => 2, 'cols' => 5])->label('Многострочное текстовое поле');?>  
		</div>
		<div class="button">
		<div class="btn-1">
               <?= Html::submitButton('Отправить ', ['class' => 'booking-Button', 'name' => 'contact-button']) ?>
         </div> 
         </div> 
	<?php ActiveForm::end(); ?>
    <?php endif; ?>

</div>


