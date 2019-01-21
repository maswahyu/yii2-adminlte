<?php

namespace maswahyu\adminlte\assets;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * Asset bundle for loading bootstrap.js
 * @since 0.1
 */
class BootstrapJsAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap/dist';

    public $js = [
        'js/bootstrap.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
