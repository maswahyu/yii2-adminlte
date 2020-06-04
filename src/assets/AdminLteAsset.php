<?php

namespace maswahyu\adminlte\assets;

use maswahyu\yii2admin\assets\AdminAsset;
use yii\base\Exception;
// use yii\web\AssetBundle;

/**
 * AdminLTE asset bundle. Uses AdminLTE 3.x
 * @since 0.1
 */
class AdminLteAsset extends AdminAsset
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
        'maswahyu\adminlte\assets\BootstrapJsAsset',
        'yii\web\YiiAsset',
    ];
}
