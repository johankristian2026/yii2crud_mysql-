<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Siswa $model */

$this->title = 'Create Siswa';
$this->params['breadcrumbs'][] = ['label' => 'Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-create">
    <h1><?= Html::encode($this->title) ?></h1>
	<div class="siswa-form">
	    <?php $form = ActiveForm::begin(); ?>
	    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
	    <?= $form->field($model, 'kelas')->textInput(['maxlength' => true]) ?>
	    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
	    <div class="form-group">
	        <?= Html::submitButton('Create', [
	            'class' => 'btn btn-success'
	        ]) ?>
	        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-secondary']) ?>
	    </div>
	    <?php ActiveForm::end(); ?>

	</div>

</div>