<?php

namespace maswahyu\adminlte\assets;

use maswahyu\yii2admin\assets\AdminAsset;
use yii\base\Exception;
// use yii\web\AssetBundle;

/**
 * AdminLTE asset bundle. Uses AdminLTE 3.x
 * @since 0.1
 */
class ChartJsAsset extends AdminAsset
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins/chart.js';

    public $css = [
        'Chart.min.css',
    ];

    public $js = [
        'Chart.min.js',
    ];

    public $depends = [
        'maswahyu\adminlte\assets\BootstrapJsAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
    ];
}
