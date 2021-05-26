<?php

namespace janami\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Lustria&amp;display=swap',
        'https://fonts.googleapis.com/css2?family=Alex+Brush&amp;display=swap',
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap',
        'https://use.fontawesome.com/releases/v5.11.0/css/all.css',
        '/css/bootstrap.min.css',
        '/css/flaticon.css',
        '/css/menu.css',
        ['/css/fade-down.css', 'media' => 'all', 'id' => 'effect'],
        '/css/tweenmax.css',
        '/css/magnific-popup.css',
        '/css/owl.carousel.min.css',
        '/css/flexslider.css',
        '/css/owl.theme.default.min.css',
        '/css/jquery.datetimepicker.min.css',
        '/css/pink-theme.css',
       // '/css/rose-theme.css',
       // '/css/silk-theme.css',
       // '/css/gold-theme.css',
        '/css/responsive.css',
        '/css/custom.css?v=1.1',
    ];
    public $js = [
        '/js/bootstrap.min.js',
        '/js/modernizr.custom.js',
        '/js/jquery.easing.js',
        '/js/jquery.appear.js',
        '/js/jquery.scrollto.js',
        '/js/menu.js',
        '/js/materialize.js',
        '/js/tweenmax.min.js',
        '/js/slideshow.js',
        '/js/imagesloaded.pkgd.min.js',
        '/js/isotope.pkgd.min.js',
        '/js/jquery.flexslider.js',
        '/js/owl.carousel.min.js',
        '/js/jquery.magnific-popup.min.js',
        '/js/hero-form.js',
        '/js/contact-form.js',
        '/js/comment-form.js',
        '/js/booking-form.js',
        '/js/jquery.datetimepicker.full.js',
        '/js/jquery.ajaxchimp.min.js',
        '/js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        #  'yii\bootstrap\BootstrapAsset',
    ];
}