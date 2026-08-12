<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\Pagination;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Admin;

class AdminController extends Controller
{
    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }

    public function actionIndex()
    {
        $query = Admin::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $admins = $query->orderBy('user')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'admins' => $admins,
            'pagination' => $pagination,
        ]);
    }

    public function actionCreate()
    {
        $model = new Admin();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }
        return $this->render('create', ['model' => $model]);
    }

    public function actionUpdate($id)
    {
        $model = Admin::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }
        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        Admin::findOne($id)->delete();
        return $this->redirect(['index']);
    }

    public function actionView($id)
    {
        $model = Admin::findOne($id);
        return $this->render('view', ['model' => $model]);
    }
}
