<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'css/bootstrap.min.css',
        'css/style.css',
        'css/versions.css',
        'css/responsive.css',
        'css/custom.css',
    ];
    public $js = [
        'js/modernizer.js',
        'js/html5shiv.js',
        'js/respond.min.js',
        'js/all.js',
        'js/custom.js',
        'js/timeline.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
