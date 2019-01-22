<?php

namespace maswahyu\adminlte\assets;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * AdminLTE asset bundle. Uses AdminLTE 3.x
 * @since 0.1
 */
class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    public $css = [
        'css/adminlte.min.css',
        '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
    ];

    public $js = [
        'js/adminlte.min.js',
    ];

    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
    ];

    public $navbarVariant = 'navbar-light bg-white';

    public $sidebarVariant = 'sidebar-dark-primary';

    public $brandVariant = 'bg-white';

    public $logo;

    public $navbarMenuLeft = [
        ['label' => '<i class="fa fa-bars"></i>', 'url' => '#', 'options' => ['data-widget' => 'pushmenu']],
        ['label' => 'Home', 'url' => ['site/index']],
        ['label' => 'About', 'url' => ['site/about']],
        ['label' => 'Contact', 'url' => ['site/contact']],
    ];

    public $navbarMenuRight = [
        ['label' => '<i class="fa fa-sign-out-alt"></i> Logout', 'url' => ['site/logout']],
    ];

    public $sidebarMenu = [
        ['icon' => 'fa fa-tachometer-alt', 'label' => 'Dashboard', 'url' => ['site/index']],
    ];
}
