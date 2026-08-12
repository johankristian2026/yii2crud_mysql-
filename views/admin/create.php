<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Admin $model */

$this->title = 'Create Admin';
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-create">
    <h1><?= Html::encode($this->title) ?></h1>
	<div class="admin-form">
	    <?php $form = ActiveForm::begin(); ?>
	    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>
	    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
	    <div class="form-group">
	        <?= Html::submitButton('Create', [
	            'class' => 'btn btn-success'
	        ]) ?>
	        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-secondary']) ?>
	    </div>
	    <?php ActiveForm::end(); ?>

	</div>

</div>