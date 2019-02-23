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

    public $navbarId = 'navbar';

    public $bodyId = 'body';

    public $sidebarId = 'sidebar';

    public $contentId = 'content';

    public $footerId = 'footer';

    public $disableContentHeader = false;

    /**
     * Whether to show logged in user badge on the sidebar. Default to true.
     * @var boolean
     */
    public $showUserOnSidebar = true;

    /**
     * Use this option to show your app version. Will be displayed on right side of the footer.
     * @var string
     */
    public $version;

    /**
     * Use this option to customize your copyright text on the footer.
     * @var STRING
     */
    public $copyright;

    /**
     * Navbar menu on the left side
     * @var array
     */
    public $navbarMenuLeft = [
        ['label' => '<i class="fa fa-bars"></i>', 'url' => '#', 'options' => ['data-widget' => 'pushmenu']],
        ['label' => 'Home', 'url' => ['site/index']],
        ['label' => 'About', 'url' => ['site/about']],
        ['label' => 'Contact', 'url' => ['site/contact']],
    ];

    /**
     * Navbar menu on the right side
     * @var array
     */
    public $navbarMenuRight = [
        ['label' => '<i class="fa fa-sign-out-alt"></i> Logout', 'url' => ['site/logout']],
    ];

    /**
     * Sidebar menu items
     * @var array
     */
    public $sidebarMenu = [
        ['icon' => 'fa fa-tachometer-alt', 'label' => 'Dashboard', 'url' => ['site/index']],
    ];
}
