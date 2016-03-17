<?php

namespace app\modules\admin;

use Yii;
use yii\web\HttpException;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';
    private $user = null;

    public function init()
    {
        parent::init();

        if (Yii::$app->user->isGuest)
            $this->redirect(['/public/login']);

        $this->user = Yii::$app->user->getIdentity();

        // custom initialization code goes here
        $this->layout = "admin";

        if ($this->user->admin <= 10)
            throw new HttpException(403, "Access Denied");
    }
}
