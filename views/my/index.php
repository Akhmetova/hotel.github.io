<?php
use yii\helpers\Html;
use yii\bootstrap\Carousel;
use yii\bootstrap\ActiveForm;
use app\models\Products;
use yii\jui\DatePicker;
use app\models\Gallery;
use yii\helpers\Url;
/* @var $this yii\web\View */
use app\assets\AppAsset;
AppAsset::register($this);
$this->title = 'Гостиничный комплекс Жемчужина';
$gallery = Gallery::find()->one();
?>
<script src="/assets/fcdf488/jquery.js"></script>
<script src="/assets/e3bf86eb/jquery-ui.js"></script>
<script src="/assets/e3bf86eb/ui/i18n/datepicker-ru.js"></script>
<script src="/assets/9498f3ba/yii.js"></script>
<script>jQuery(function ($) {
jQuery('#w0').datepicker($.extend({}, $.datepicker.regional['ru'], {"buttonImage":"fa fa-calendar","format":"yyyy-mm-dd","todayHighlight":true,"minDate":"0d","dateFormat":"dd.mm.yy"}));
jQuery('#w1').datepicker($.extend({}, $.datepicker.regional['ru'], {"format":"yyyy-mm-dd","todayHighlight":true,"minDate":"0d","dateFormat":"dd.mm.yy"}));
});</script>

<?php

$gallery = $gallery->getImages();
?>

<div class="slider">
	<div class="slides">
			<?php foreach ($gallery as $img): ?>
				 <div class="slide">
					<a href="" ><?= Html::img($img->getUrl('1920x700'), ['alt' => $model->text])?></a>
				</div>
			
			<?php endforeach;?>
		
	
	</div>
</div>


<div class="container-index">

<div class="hotel">
	<div class="productst-date">
		<div class="productst-form-name">
					<h3>БРОНИРОВАНИЕ НОМЕРА</h3>
		</div>
		<?php 
		 echo DatePicker::widget([
				'model' => $model,
				'attribute' => 'created_at',
				'options' => ['placeholder' => 'Выберити дату заезда',],
				'language' => 'ru',
				'dateFormat' => 'dd.MM.yyyy',
				'clientOptions' => [
				'buttonImage' => "fa fa-calendar",
				'format' => 'yyyy-mm-dd',
				'todayHighlight' => true,
				'minDate' => '0d',
			]
		]);
		?>
		<?php 
		 echo DatePicker::widget([
				'model' => $model,
				'attribute' => 'updated_at',
				'options' => ['placeholder' => 'Выберити дату отъезда'],
				'language' => 'ru',
				'dateFormat' => 'dd.MM.yyyy',
				'clientOptions' => [
				'format' => 'yyyy-mm-dd',
				'todayHighlight' => true,
				'minDate' => '0d',
			]
		]);
		?>
		<div class="productst-date-element-button">
					<a href="<?=Url::to(['/products/index']);?>">Забронировать</a>
				</div>
		</div>
<div class="content-description">
		<span><h3>Комплекс Жемчужина расположена на территории Ямало - Ненецкого округа, по адресу: ПТПС, Губкинский. Гостиница Жемчужина насчитывает 23 номера, которые полностью оборудованы для Вашего удобства и комфорта. Для Вас в нашей гостинице следующие услуги</h3></span>
</div>	
<div class="Service-section">
	<div class="col-md-4">
		<div class="service-area">
			<div class="media">
				<div class="service-icon">
					<div class="fa fa-wifi"></div>
					<p>Бесплатный интернет</p>
				</div>
				<div class="media-body"></div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="service-area">
			<div class="media">
				<div class="service-icon">
					<div class="fa fa-cutlery"></div>
					<p>Бесплатный завтрак</p>
				</div>
			<div class="media-body"> </div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="service-area">
		<div class="media">
			<div class="service-icon">
				<div class="fa fa-plane"></div>
				<p>Трансфер (за дополнительную плату)</p>
			</div>
			<div class="media-body"></div>
		</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-4">
		<div class="service-area">
			<div class="media">
				<div class="service-icon">
					<div class="fa fa-car"></div>
					<p>Бесплатная автомойка</p>
				</div>
			<div class="media-body"> </div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="service-area">
			<div class="media">
				<div class="service-icon">
					<div class="fa fa-product-hunt"></div>
					<p>Парковка автомобиля</p>
				</div>
			<div class="media-body"> </div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="service-area">
			<div class="media">
				<div class="service-icon">
					<div class="fa fa-group"></div>
					<p>Внимательный и заботливый персонал</p>
				</div>
			<div class="media-body"> </div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>

</div>
</div>

