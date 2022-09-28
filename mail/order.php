<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\Categories;
use app\models\Products;
use app\models\Booking;
use yii\helpers\Url;

$product = Products::find()->where(['id' => $_GET['id']])->one();


?>

<div class="table-responsive">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<label for="">Название номера: </br><h5><?php echo $product['name'];?><h5></label>
				<label for="">Цена: </br><?php echo $product['price'];?>руб.</label>
			</tr>
		</thead>
		<table>
			<label for="">Данные о клиенте: </br>
				<tr>
					<td>
						<?php if (isset($_POST['Booking']) && is_array($_POST['Booking']))
						{
							foreach ($_POST['Booking'] as $row) 
						{
							echo $row, '<br/>';
							}
						}
						?>
					</td>
				</tr>
			</label>
	</table>
</div>
	
							