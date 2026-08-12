<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Team $model */

$this->title = 'Update Admin: ' . $model->user;
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="team-update">
    <h1><?= Html::encode($this->title) ?></h1>
	<div class="admin-form">
	    <?php $form = ActiveForm::begin(); ?>
	    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>
	    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
	    <div class="form-group">
	        <?= Html::submitButton('Update', [
	            'class' => 'btn btn-primary'
	        ]) ?>
	        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-secondary']) ?>
	    </div>
	    <?php ActiveForm::end(); ?>
	</div>
</div>
