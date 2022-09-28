<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\bootstrap\Carousel;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>	
<header class="header">
	<div class="container">
		<div class="header-logotip">
		<a href="<?=Url::home();?>" class="logo">
			<img src="/images/logo.png">
		</a>
		</div>
		<div class="header-element">
			<div class="header-elements">
				<div class="header-adress"><div class="fa fa-hospital-o"></div>
					<span>Адрес</br>город Губкинский, 1-я панель, 1</span>
				</div>
				<div class="header-phone"><div class="fa fa-phone"></div>
					<span>Телефон</br>8-34936-2-92-84</span>
				</div>
				<div class="header-mode"><div class="fa fa-clock-o"></div>
					<span>Режим работы</br>Круглосуточно</span>
				</div>
			</div>
		</div>
	</div>
</header>
	<div class="container">
		<div class="menu">
			<div class="menu__icon">
			  <span></span>
			  <span></span>
			  <span></span>
			  <span></span>
			</div>
		<div class="menu__links">
			<li class="menu__links-item"><?= Html::a('Главная', ['my/index'])?></li>
			<li class="menu__links-item"><?= Html::a('Номерной фонд', ['my/catalog'])?></li>
			<li class="menu__links-item"><?= Html::a('Сауна', ['my/sauna'])?></li>
			<li class="menu__links-item"><?= Html::a('Дополнительные услуги', ['my/services'])?></li>
			<li class="menu__links-item"><?= Html::a('Бронирование', ['my/booking'])?></li>
			<li class="menu__links-item"><?= Html::a('Как добраться до гостиницы', ['my/maps'])?></li>
		</div>
	</div>

	<div class="container">
		<?= $content?>
	</div>
	</div>
<footer class="footer">
    <div class="container">
		<div class="footer-adress"><div class="fa fa-hospital-o"></div>
			<span>Адрес</br>город Губкинский, 1-я панель, 1</span>
		</div>
		<div class="footer-phone"><div class="fa fa-phone"></div>
			<span>Телефон</br>8-34936-2-92-84</span>
		</div>
		<div class="footer-mode"><div class="fa fa-clock-o"></div>
			<span>Режим работы</br>Круглосуточно</span>
		</div>
		<div class="logo-footer"><img src="/images/logo.png"></div>
	</div>	
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>