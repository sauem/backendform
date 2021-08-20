<?php

namespace vietau\assets;

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
        '/venobox/venobox.css',
        '/css/nivo-slider.css',
        '/css/animate.css',
        '/css/slick.css',
        '/css/owl.carousel.css',
        '/css/owl.transitions.css',
        '/css/font-awesome.min.css',
        '/css/meanmenu.min.css',
        '/css/theme-default.css',
        '/css/widget.css',
        '/css/unittest.css',
        '/css/style.css',
        '/css/responsive.css',
        '/css/custom.css?v=1.5',
    ];
    public $js = [
        '/js/vendor/modernizr-3.5.0.min.js',
        '/js/vendor/jquery-3.2.1.min.js',
        '/js/bootstrap.min.js',
        '/js/jquery.directional-hover.min.js',
        '/js/imagesloaded.pkgd.min.js',
        '/js/jquery.meanmenu.js',
        '/js/isotope.pkgd.min.js',
        '/js/owl.carousel.min.js',
        '/js/jquery.scrollUp.js',
        '/js/jquery.nivo.slider.pack.js',
        '/js/jquery.counterup.min.js',
        '/js/slick.min.js',
        '/js/jquery.nav.js',
        '/js/wow.js',
        '/js/jquery-scrolltofixed-min.js',
        '/venobox/venobox.min.js',
        '/js/waypoints.min.js',
        '/js/jquery.countdown.min.js',
        '/js/theme.js',

    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
