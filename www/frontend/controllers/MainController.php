<?php

namespace frontend\controllers;



class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionMain()
    {
        $model = new \frontend\models\TestModel();
        return $this->render('main', ['model' => $model]);
    }

    public function actionView()
    {
        return $this->render('view');
    }

}
