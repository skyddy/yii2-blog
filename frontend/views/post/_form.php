<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Category;
use vova07\imperavi\Widget;


/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

	<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'imageFile')->fileInput() ?>

	<?= $form->field($model, 'lead_text')->widget(Widget::className(), [
		'settings' => [
			'lang' => 'en',
			'minHeight' => 150,
			'plugins' => [
				'fullscreen',
				'table',
				'video',
				'fontsize',
				'fontfamily'
			]
		]
	]) ?>

	<?= $form->field($model, 'content')->widget(Widget::className(), [
		'settings' => [
			'lang' => 'en',
			'minHeight' => 250,
			'plugins' => [
				'fullscreen',
				'table',
				'video',
				'fontsize',
				'fontfamily'
			]
		]
	]) ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'name')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
