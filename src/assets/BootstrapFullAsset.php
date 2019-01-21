<?php

namespace maswahyu\adminlte\assets;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * Asset bundle for loading bootstrap.css and bootstrap.js
 * @since 0.1
 */
class BootstrapFullAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap/dist';

    public $css = [
        'css/bootstrap.css',
    ];

    public $js = [
        'js/bootstrap.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
