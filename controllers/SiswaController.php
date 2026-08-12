<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\Pagination;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Siswa;

class SiswaController extends Controller
{
    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }

    public function actionIndex()
    {
        $query = Siswa::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $siswa = $query->orderBy('nama')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'siswa' => $siswa,
            'pagination' => $pagination,
        ]);
    }

    public function actionCreate()
    {
        $model = new Siswa();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }
        return $this->render('create', ['model' => $model]);
    }

    public function actionUpdate($id)
    {
        $model = Siswa::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }
        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        Siswa::findOne($id)->delete();
        return $this->redirect(['index']);
    }

    public function actionView($id)
    {
        $model = Siswa::findOne($id);
        return $this->render('view', ['model' => $model]);
    }
}
