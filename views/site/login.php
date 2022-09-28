<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Carousel;
$this->title = 'Войти в панель управления сайта';

?>
<div class="container-index">


<link rel="stylesheet" href="http://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
<script src="http://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>
<script src="http://bootstraptema.ru/_sf/3/394.js" type="text/javascript"></script>
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



<div class="modal fade login" id="loginModal">
	<div class="modal-dialog login animated">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Гостиничный комплекс Жемчужина</h4>
			</div>
		<div class="modal-body"> 
			<div class="box">
				<div class="content">
				    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
						<?= $form->field($model, 'username')->textInput(array('placeholder' => 'Номер Вашего телефона',['autofocus' => true])) ?>
						<?= $form->field($model, 'password')->passwordInput(array('placeholder' => 'Номер Вашего телефона') )?>
							
						
							
							
								<div class="form-group">
									<div class="col-lg-offset-1 col-lg-11">
									<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
									</div>
								</div>
					<?php ActiveForm::end(); ?>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<script>
 $(document).ready(function(){
 openLoginModal(); 
 });
</script>