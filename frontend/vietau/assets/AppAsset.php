<?php

namespace frontend\vietau\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap',
        '/vietau/css/bootstrap.min.css',
        '/vietau/css/main.css',
        '/vietau/css/responsive.css',
        '/vietau/css/custom.css?v=1.3',
    ];
    public $js = [
        '//cdn.jsdelivr.net/npm/sweetalert2@10',
        '/vietau/js/popper.min.js',
        '/vietau/js/jquery.mCustomScrollbar.concat.min.js',
        '/vietau/js/jquery.fancybox.js',
        '/vietau/js/appear.js',
        '/vietau/js/owl.js',
        '/vietau/js/wow.js',
        '/vietau/js/parallax.min.js',
        '/vietau/js/tilt.jquery.min.js',
        '/vietau/js/jquery.paroller.min.js',
        '/vietau/js/jquery-ui.js',
        '/vietau/js/script.js',
        '/vietau/js/const.js',
        '/vietau/js/templ.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        #  'yii\bootstrap\BootstrapAsset',
    ];
}
