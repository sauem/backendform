<?php

namespace frontend\brouchure\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/bootstrap.min.css',
        '/css/animate.css',
        '/css/font-awesome.css',
        '/css/flaticon.css',
        '/css/themify-icons.css',
        '/css/slick.css',
        '/css/prettyPhoto.css',
        '/css/shortcodes.css',
        '/css/main.css',
        '/css/megamenu.css',
        '/css/responsive.css',
        '/css/custom.css',
    ];
    public $js = [
        '//cdn.jsdelivr.net/npm/sweetalert2@10',
        '/js/jquery-migrate-3.3.2.min.js',
        '/js/bootstrap.min.js',
        '/js/jquery.easing.js',
        '/js/jquery-waypoints.js',
        '/js/jquery-validate.js',
        '/js/jquery.prettyPhoto.js',
        '/js/slick.min.js',
        '/js/numinate.min.js',
        '/js/imagesloaded.min.js',
        '/js/jquery-isotope.js',
        '/js/main.js',
        '/js/temp.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        #  'yii\bootstrap\BootstrapAsset',
    ];
}
