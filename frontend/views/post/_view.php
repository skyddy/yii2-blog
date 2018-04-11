<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
?>

<div class="panel panel-default">

	<div class="panel-heading">
		<h4 class="panel-title">
			<?= Html::encode($model->title) ?>
		</h4>
	</div>

	<div class="panel-body">
		<?= $model->lead_text ?>
	</div>

</div>