<?php

namespace maswahyu\adminlte\assets;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * AdminLTE iCheck plugin asset bundle. Uses AdminLTE 3.x
 * @since 0.1
 */
class iCheckAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins/iCheck';

    public $css = ['all.css'];

    public $js = ['icheck.min.js'];

    public $depends = [
        'maswahyu\adminlte\assets\AdminLteAsset',
    ];
}
