<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Account;
use app\models\LoginForm;
use app\models\ContactForm;

class AccountController extends Controller
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


    public function actionCreate()
    {
        $model = new Account;
        $model->user = $this->user->id;
        $model->created = time();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {

                Yii::$app->session->setFlash("success", "Your account has been created, welcome to the game!");
                $model->active = true;
                $model->save();

                return $this->redirect(['/site/index']);
            }
        }

        return $this->render('create', [
            'user' => $this->user,
            'model' => $model,
        ]);
    }
}