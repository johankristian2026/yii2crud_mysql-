<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Siswa</h1>
<?= Html::a('Create', ['create'], ['class' => 'btn btn-primary']) ?>
<table>
    <tr>
        <th style="width:20%;">Nama</th>
        <th style="width:20%;">Kelas</th>
        <th style="width:20%;">Alamat</th>
        <th style="width:40%;">Action</th>
    </tr>
    <?php foreach ($siswa as $siswa): ?>
    <tr>
        <td><?= Html::encode("{$siswa->nama}") ?></td>
        <td><?= Html::encode("{$siswa->kelas}") ?></td>
        <td><?= Html::encode("{$siswa->alamat}") ?></td>
        <td><?= Html::a('View', ['view', 'id' => $siswa->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Update', ['update', 'id' => $siswa->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $siswa->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>