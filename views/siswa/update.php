<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Team $model */

$this->title = 'Update Siswa: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="team-update">
    <h1><?= Html::encode($this->title) ?></h1>
	<div class="siswa-form">
	    <?php $form = ActiveForm::begin(); ?>
	    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
	    <?= $form->field($model, 'kelas')->textInput(['maxlength' => true]) ?>
	    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
	    <div class="form-group">
	        <?= Html::submitButton('Update', [
	            'class' => 'btn btn-primary'
	        ]) ?>
	        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-secondary']) ?>
	    </div>
	    <?php ActiveForm::end(); ?>
	</div>
</div>
