<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    private $user = null;

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'except' => ['error'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    return $this->redirect(['/public/login']);
                },
            ],
        ];
    }

    public function init() {
        if (Yii::$app->user->isGuest)
            $this->redirect(['/public/login']);
            
        $this->layout = "lte";

        $this->user = Yii::$app->user->getIdentity();
    }


    public function actionIndex()
    {
        return $this->render('index', [
            'user' => $this->user,
        ]);
    }
}