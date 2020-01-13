<?php

namespace maswahyu\adminlte\assets;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * AdminLTE SweetAlert2 plugin asset bundle. Uses AdminLTE 3.x
 * @since 0.1
 */
class SweetAlert2Asset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins/sweetalert2';

    public $css = ['sweetalert2.min.css'];

    public $js = ['sweetalert2.all.min.js'];

    public $depends = [
        'maswahyu\adminlte\assets\AdminLTEAsset',
    ];
}
