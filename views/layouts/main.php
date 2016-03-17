<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\web\HttpException;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$user = Yii::$app->user->getIdentity();

$profileImage = Yii::$app->request->baseurl . "/images/profile_image_holder.png";

$controllerName = Yii::$app->controller->id;
$actionName = Yii::$app->controller->action->id;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
        <?= Html::csrfMetaTags() ?>
        <title>Lost Panda :: <?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <style>
            body {
                background-image: url("<?php echo Yii::$app->request->baseUrl; ?>/images/bg.png");
                color: #EEE;
            }

            #content-outer {
                background: rgba(51, 51, 51, 0.8);
                border-radius: 5px;
            }

            @media (min-width: 1200px) { 
                #wrapper {
                    padding-top: 25px;
                    padding-bottom: 50px;
                }
            }

            .height-100 {
                height: 100%;
            }

            .modal-body{
                max-height: calc(100vh - 200px);
                overflow-y: auto;
            }
        </style>
    </head>
    <body>
        <?php $this->beginBody() ?>
            <div class="row height-100" id="wrapper">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1 height-100" id="content-outer">

                    <div class="row height-100">
                        <div class="hidden-xs col-xs-12 text-center">
                            <h1>Header</h1>
                        </div>
                        <div class="hidden-xs col-sm-2 text-left">
                            Left Menu Items
                        </div>
                        <div class="col-sm-8 text-center">
                            <?php if (Yii::$app->session->hasFlash('success')): ?> 
                                <div class="alert alert-success">
                                    <?php echo Yii::$app->session->getFlash('success'); ?>
                                </div>
                            <?php endif ?>

                            <?php if (Yii::$app->session->hasFlash('danger')): ?> 
                                <div class="alert alert-danger">
                                    <?php echo Yii::$app->session->getFlash('danger'); ?>
                                </div>
                            <?php endif ?>

                            <?= $content ?>
                        </div>
                        <div class="hidden-xs col-sm-2 text-right">
                            Left Menu Items
                        </div>
                    </div>
                </div>
            </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
