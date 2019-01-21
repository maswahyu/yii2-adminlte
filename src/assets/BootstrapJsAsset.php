<?php

namespace maswahyu\adminlte\assets;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * AdminLTE Bootstrap asset bundle. Uses AdminLTE 3.x
 * @since 0.1
 */
class BootstrapJsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    public $js = ['js/plugins/bootstrap/js/bootstrap.min.js'];
}
