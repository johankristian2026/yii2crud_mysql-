<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Admin</h1>
<?= Html::a('Create', ['create'], ['class' => 'btn btn-primary']) ?>
<table>
    <tr>
        <th style="width:28%;">User</th>
        <th style="width:28%;">Password</th>
        <th style="width:44%;">Action</th>
    </tr>
    <?php foreach ($admins as $admin): ?>
    <tr>
        <td><?= Html::encode("{$admin->user}") ?></td>
        <td><?= $admin->password ?></td>
        <td><?= Html::a('View', ['view', 'id' => $admin->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Update', ['update', 'id' => $admin->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $admin->id], [
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