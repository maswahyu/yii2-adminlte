<?php

namespace maswahyu\adminlte\assets;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * Asset bundle for loading bootstrap.css
 * @since 0.1
 */
class BootstrapCssAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap/dist';

    public $css = [
        'css/bootstrap.css',
    ];
}
