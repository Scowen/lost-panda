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
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no>
        <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
        <?= Html::csrfMetaTags() ?>
        <title>Lost Panda :: <?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <style>
            body {
                background: url("<?php echo Yii::$app->request->baseUrl; ?>/images/bg.png") no-repeat center center fixed;
                -moz-background-size: cover;
                -webkit-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                color: #EEE;
            }


        </style>
    </head>
    <body class="hold-transition fixed sidebar-mini" style="width:100%; padding: 0px">
        <?php $this->beginBody() ?>
            <div class="row height-100" id="wrapper" style="width:100%; margin-left:0px; top:0px; left: 0px; padding: 0px">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1 height-100" id="content-outer" style="padding: 0px;">

                    <div class="wrapper">
                        <header class="main-header">
                            <?= Html::a('<span class="logo-mini"><b>PT</b></span><span class="logo-lg"><b>Project</b> Title</span>', ['/'], ['class' => 'logo']); ?>
                            <!-- Header Navbar: style can be found in header.less -->
                            <nav class="navbar navbar-static-top" role="navigation">
                                <!-- Sidebar toggle button-->
                                <a href="#" class="visible-xs sidebar-toggle" data-toggle="offcanvas" role="button">
                                    <span class="sr-only">Toggle navigation</span>
                                </a>

                                <div class="navbar-custom-menu hidden-xs">
                                    <ul class="nav navbar-nav" id="player-stats">
                                        <li><?= Html::a("<i class='fa fa-gbp text-green'></i> 123,456,789", ['/bank'], ['title' => 'Money']); ?></li>
                                        <li><?= Html::a("<i class='fa fa-bullseye text-teal'></i> 123,456,789", ['/bf'], ['title' => 'Bullets']); ?></li>
                                        <li><?= Html::a("<i class='fa fa-diamond' style='color:yellow'></i> 50,000", ['/diamond'], ['title' => 'Diamonds']); ?></li>
                                        <li><?= Html::a("<i class='fa fa-heart text-red'></i> 100", ['/hospital'], ['title' => 'Health']); ?></li>
                                    </ul>
                                </div>

                                <!-- Navbar Right Menu -->
                                <div class="navbar-custom-menu pull-left">
                                    <ul class="nav navbar-nav">
                                        <!-- Messages: style can be found in dropdown.less-->
                                        <li class="dropdown messages-menu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-envelope-o"></i>
                                                <span class="label label-success">X</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="header">You have X messages</li>
                                                <li>
                                                    <!-- inner menu: contains the actual data -->
                                                    <ul class="menu">
                                                        <!-- <li>
                                                            <a href="#">
                                                                <div class="pull-left">
                                                                    <img src="<?= $profileImage ?>" class="img-circle" alt="User Image">
                                                                </div>
                                                                <h4>
                                                                    AdminLTE Design Team
                                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                                </h4>
                                                                <p>Why not buy a new awesome theme?</p>
                                                            </a>
                                                        </li> -->
                                                    </ul>
                                                </li>
                                                <li class="footer">
                                                    <?= Html::a("Go to Inbox", ['inbox']); ?>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- Notifications: style can be found in dropdown.less -->
                                        <li class="dropdown notifications-menu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-bell-o"></i>
                                                <span class="label label-warning">X</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="header">You have X notifications</li>
                                                <li>
                                                    <!-- inner menu: contains the actual data -->
                                                    <!-- <ul class="menu">
                                                        <li>
                                                            <a href="#">
                                                                Example
                                                            </a>
                                                        </li>
                                                    </ul> -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li><?= Html::a("<i class='fa fa-dashboard'></i>", ['/admin'], ['title' => 'Admin', 'target' => '_blank']); ?></li>
                                    </ul>
                                </div>
                            </nav>
                        </header>

                        <!-- Left side column. contains the logo and sidebar -->
                        <aside class="main-sidebar" style="position: absolute;">
                            <!-- sidebar: style can be found in sidebar.less -->
                            <section class="sidebar">
                                <!-- Sidebar user panel -->
                                <div class="user-panel">
                                    <div class="pull-left image">
                                        <img src="<?= $profileImage ?>" class="img-circle" alt="User Image">
                                    </div>
                                    <div class="pull-left info">
                                        <p><?= $user->username ?></p>
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <?= Html::a("Civilian", ['/rank']); ?>
                                            </div>
                                            <div class="col-xs-4 text-right" style="color: #DDD">
                                                45%
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12" style="padding-top:5px; padding-left: 15px; padding-right: 15px">
                                                <div style="height:1px; background:rgba(0, 166, 90, 0.8); float:left; width:45%;"></div>
                                                <div style="height:1px; background:rgba(51, 51, 51, 0.8); float:left; width:55%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <form action="#" method="get" class="sidebar-form">
                                    <div class="input-group">
                                        <input type="text" name="q" class="form-control" placeholder="Search for Player..." style="
                                            background: rgba(255,255,255,0.1);
                                            border: none;
                                            color: #EEE;
                                        ">
                                        <span class="input-group-btn">
                                            <button type="submit" name="search" id="search-btn" class="btn btn-flat" style="
                                            background: rgba(255,255,255,0.2);
                                            color: #EEE;
                                        "><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form> -->
                                <!-- sidebar menu: : style can be found in sidebar.less -->
                                <ul class="sidebar-menu" style="overflow: hidden;">
                                    <!-- <li class="header">SECTION HEADER</li> -->
                                    <li id="menu-forum"><?= Html::a('<i class="fa fa-comments"></i> <span>FORUMS</span>', ['/forum']); ?></li>
                                    <li class="treeview active" id="treeview-gameplay">
                                        <a href="#">
                                            <i class="fa fa-star-half-o"></i> <span>GAMEPLAY</span> <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li id="menu-steal-weapon"><?= Html::a('<i class="fa fa-circle-o"></i> Rob Munitions</a></li>', ['/steal/weapon']); ?></li>
                                            <li id="menu-steal-vehicle"><?= Html::a('<i class="fa fa-circle-o"></i> Steal a Vehicle</a></li>', ['/steal/vehicle']); ?></li>
                                            <li id="menu-steal-aircraft"><?= Html::a('<i class="fa fa-circle-o"></i> Hijack an Aircraft</a></li>', ['/steal/aircraft']); ?></li>
                                            <li id="menu-operation"><?= Html::a('<i class="fa fa-circle-o"></i> Operation</a></li>', ['/operation']); ?></li>
                                            <li id="menu-hunt"><?= Html::a('<i class="fa fa-circle-o"></i> Hunt &amp; Kill</a></li>', ['/hunt']); ?></li>
                                            <li id="menu-mission"><?= Html::a('<i class="fa fa-circle-o"></i> Missions</a></li>', ['/mission']); ?></li>
                                            <li id="menu-inventory"><?= Html::a('<i class="fa fa-circle-o"></i> Inventory</a></li>', ['/inventory']); ?></li>
                                            <li id="menu-garage"><?= Html::a('<i class="fa fa-circle-o"></i> Garage</a></li>', ['/vehicle']); ?></li>
                                            <li id="menu-hangar"><?= Html::a('<i class="fa fa-circle-o"></i> Hangar</a></li>', ['/aircraft']); ?></li>
                                            <li id="menu-prison"><?= Html::a('<i class="fa fa-circle-o"></i> Prison</a></li>', ['/prison']); ?></li>
                                            <li id="menu-bf"><?= Html::a('<i class="fa fa-circle-o"></i> Bullet Factory</a></li>', ['/bf']); ?></li>
                                        </ul>
                                    </li>

                                    <li class="treeview" id="treeview-market">
                                        <a href="#">
                                            <i class="fa fa-balance-scale"></i> <span>MARKETPLACE</span> <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li id="menu-market-item"><?= Html::a('<i class="fa fa-circle-o"></i> Item Market <span class="badge pull-right">1</span></a></li>', ['/market/item']); ?></li>
                                            <li id="menu-market-property"><?= Html::a('<i class="fa fa-circle-o"></i> Property Auction <span class="badge pull-right">1</span></a></li>', ['/market/property']); ?></li>
                                            <li id="menu-market-diamond"><?= Html::a('<i class="fa fa-circle-o"></i> Diamond Exchange</a></li>', ['/market/diamond']); ?></li>
                                        </ul>
                                    </li>

                                    <li class="treeview" id="treeview-squad">
                                        <a href="#">
                                            <i class="fa fa-users"></i> <span>SQUAD</span> <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                        <?php if (isset($ifTheAccountisNotInASquad)): ?>
                                            <li id="menu-squad-apply"><?= Html::a('<i class="fa fa-circle-o"></i> Apply</a></li>', ['/squad/apply']); ?></li>
                                        <?php else: ?>
                                            <li id="menu-squad"><?= Html::a('<i class="fa fa-circle-o"></i> Overview</a></li>', ['/squad/view']); ?></li>
                                            <?php if(isset($isTheAccountAllowedToManageTheSquad)): ?>
                                                <li id="menu-squad-manage"><?= Html::a('<i class="fa fa-circle-o"></i> Manage</a></li>', ['/squad/manage']); ?></li>
                                            <?php endif ?>
                                            <li id="menu-squad-board"><?= Html::a('<i class="fa fa-circle-o"></i> Board</a></li>', ['/squad/board']); ?></li>
                                            <li id="menu-squad-safe"><?= Html::a('<i class="fa fa-circle-o"></i> Safe</a></li>', ['/squad/safe']); ?></li>
                                        <?php endif ?>

                                        </ul>
                                    </li>

                                    <li class="treeview" id="treeview-account">
                                        <a href="#">
                                            <i class="fa fa-user"></i> <span>PERSONAL</span> <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li id="menu-account-profile"><?= Html::a('<i class="fa fa-circle-o"></i> Profile</a></li>', ['/account/profile']); ?></li>
                                            <li id="menu-account-inbox"><?= Html::a('<i class="fa fa-circle-o"></i> Inbox</a></li>', ['/account/inbox']); ?></li>
                                            <li id="menu-account-settings"><?= Html::a('<i class="fa fa-circle-o"></i> Settings</a></li>', ['/account/settings']); ?></li>
                                        </ul>
                                    </li>

                                    <li class="treeview" id="treeview-gamble">
                                        <a href="#">
                                            <i class="fa fa-money"></i> <span>GAMBLING</span> <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li id="menu-gamble-blackjack"><?= Html::a('<i class="fa fa-circle-o"></i> Blackjack</a></li>', ['/gamble/blackjack']); ?></li>
                                            <li id="menu-gamble-racetrack"><?= Html::a('<i class="fa fa-circle-o"></i> Racetrack</a></li>', ['/gamble/racetrack']); ?></li>
                                            <li id="menu-gamble-roulette"><?= Html::a('<i class="fa fa-circle-o"></i> Roulette</a></li>', ['/gamble/roulette']); ?></li>
                                            <li id="menu-gamble-war"><?= Html::a('<i class="fa fa-circle-o"></i> War</a></li>', ['/gamble/war']); ?></li>
                                        </ul>
                                    </li>

                                    <li class="treeview" id="treeview-stats">
                                        <a href="#">
                                            <i class="fa fa-trophy"></i> <span>STATISTICS</span> <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li id="menu-stats-online"><?= Html::a('<i class="fa fa-circle-o"></i> Online Players</a></li>', ['/stats/online']); ?></li>
                                            <li id="menu-stats-location"><?= Html::a('<i class="fa fa-circle-o"></i> Location Stats</a></li>', ['/stats/location']); ?></li>
                                            <li id="menu-stats-squad"><?= Html::a('<i class="fa fa-circle-o"></i> Squad Stats</a></li>', ['/stats/squad']); ?></li>
                                            <li id="menu-stats-account"><?= Html::a('<i class="fa fa-circle-o"></i> Your Stats</a></li>', ['/stats/account']); ?></li>
                                            <li id="menu-stats-first"><?= Html::a('<i class="fa fa-circle-o"></i> Round Firsts</a></li>', ['/stats/first']); ?></li>
                                            <li id="menu-stats-recent"><?= Html::a('<i class="fa fa-circle-o"></i> Round Recents</a></li>', ['/stats/recent']); ?></li>
                                            <li id="menu-stats-best"><?= Html::a('<i class="fa fa-circle-o"></i> Round Bests</a></li>', ['/stats/best']); ?></li>
                                        </ul>
                                    </li>

                                    <li class="treeview" id="treeview-about">
                                        <a href="#">
                                            <i class="fa fa-tags"></i> <span>ABOUT &amp; HELP</span> <i class="fa fa-angle-left pull-right"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li id="menu-about-helpdesk"><?= Html::a('<i class="fa fa-circle-o"></i> Helpdesk</a></li>', ['/helpdesk']); ?></li>
                                            <li id="menu-about-wiki"><?= Html::a('<i class="fa fa-circle-o"></i> Wiki</a></li>', ['/wiki']); ?></li>
                                            <li id="menu-about-tos"><?= Html::a('<i class="fa fa-circle-o"></i> Terms of Service</a></li>', ['/about/tos']); ?></li>
                                        </ul>
                                    </li>
                                    <li id="menu-logout"><?= Html::a('<i class="fa fa-sign-out"></i> <span>LOGOUT</span>', ['/public/logout']); ?></li>
                                </ul>
                            </section>
                            <!-- /.sidebar -->
                        </aside>

                        <div class="content-wrapper">
                            <section class="content">
                                    <div class="alert alert-success">ASD</div>
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

                                <?php if (Yii::$app->session->hasFlash('warning')): ?> 
                                    <div class="alert alert-warning">
                                        <?php echo Yii::$app->session->getFlash('warning'); ?>
                                    </div>
                                <?php endif ?>

                                <?php if (Yii::$app->session->hasFlash('info')): ?> 
                                    <div class="alert alert-info">
                                        <?php echo Yii::$app->session->getFlash('info'); ?>
                                    </div>
                                <?php endif ?>

                                <?= $content ?>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
