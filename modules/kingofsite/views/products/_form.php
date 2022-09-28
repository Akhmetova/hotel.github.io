<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;


?>
<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>
	
  

    <?= $form->field($model, 'category')->dropDownList(['Неактивный', '1', '2', '3', '4']);?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>
    <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*', ]) ?>

	<?= $form->field($model, 'description')->widget(CKEditor::className(), [
 
	'editorOptions' => ElFinder::ckeditorOptions(['elfinder', 'path' => 'some/sub/path'],[/* Some CKEditor Options */]),

	]);
	?>



    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'visible')->dropDownList(['0']);?>
	
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


