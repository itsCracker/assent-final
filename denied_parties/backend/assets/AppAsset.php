<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
        'cdn/plugins/fontawesome-free/css/all.min.css',
        'cdn/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'cdn/dist/css/adminlte.css'
    ];
    public $js = [
        //'cdn/plugins/jquery/jquery.min.js',
        'cdn/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'cdn/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'cdn/dist/js/adminlte.js',
        'cdn/plugins/jquery-mousewheel/jquery.mousewheel.js',
        'cdn/dist/js/demo.js',
        'cdn/dist/js/pages/dashboard2.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}

