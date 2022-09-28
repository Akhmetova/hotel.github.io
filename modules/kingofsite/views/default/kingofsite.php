<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Войти в панель управления сайта';

?>
<link rel="stylesheet" href="http://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
<link rel="stylesheet" href="http://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css" />
<script src="http://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>
<script src="http://bootstraptema.ru/_sf/3/394.js" type="text/javascript"></script>
<style>
.modal-header {
	text-align: center;
    font-size: 16px;
    font-weight: normal;
    font-family: Sans serif;
}
.modal-backdrop.in {
	opacity: 3.5;
}
.modal-dialog {
	width: 400px;
}
.col-lg-3 {
	width: 100%;
}
.btn-primary {
	background-color: #d4741a;
    border-color: #d4741a;
}
.btn-primary:hover{
	background-color: #d4741a;
    border-color: #d4741a;
	color: #333;
}
.form-horizontal .form-group {
	text-align: center;
}
.col-lg-11 {
	width: 100%;
}
.col-lg-offset-1 {
	margin-left: 0;
}
.col-lg-8 {
	width: auto;
	float: none;
}
</style>
<div class="modal fade login" id="loginModal">
	<div class="modal-dialog login animated">
		<div class="modal-content">
			<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Войти в панель управления</h4>
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
						]); 
						?>
						<?= $form->field($model, 'username', ['enableLabel' => false])->textInput(array('placeholder' => 'Имя пользователя', 'class'=>'form-control text-center')); ?>			
						<?= $form->field($model, 'password', ['enableLabel' => false])->passwordInput(array('placeholder' => 'Пароль', 'class'=>'form-control text-center')); ?>			
						<div class="form-group">
							<div class="col-lg-offset-1 col-lg-11">
								<?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
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