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
        //  'https://fonts.googleapis.com/css2?family=Lustria&amp;display=swap',
        //  'https://fonts.googleapis.com/css2?family=Alex+Brush&amp;display=swap',
        // 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap',
        ['/css/bootstrap.min.css', 'async' => 'true'],
        ['/css/antd.css', 'async' => 'true'],
        ['https://use.fontawesome.com/releases/v5.11.0/css/all.css', 'async' => 'true'],
        ['/css/aimate.css', 'async' => 'true'],
        ['/css/aos.css', 'async' => 'true'],
        ['/css/flaticon.css', 'async' => 'true'],
        ['/css/menu.css', 'async' => 'true'],
        ['/css/hover.css', 'async' => 'true'],
        ['/css/fade-down.css', 'media' => 'all', 'id' => 'effect'],
        ['/css/tweenmax.css', 'async' => 'true'],
        ['/css/magnific-popup.css', 'async' => 'true'],
        ['/css/owl.carousel.min.css', 'async' => 'true'],
        ['/css/flexslider.css', 'async' => 'true'],
        ['/css/jquery.desoslide.min.css', 'async' => 'true'],
        ['/css/owl.theme.default.min.css', 'async' => 'true'],
        ['/css/jquery.datetimepicker.min.css', 'async' => 'true'],
        ['/css/pink-theme.css?v=1.3', 'async' => 'true'],
//         '/css/rose-theme.css',
//         '/css/silk-theme.css',
//         '/css/gold-theme.css',
        ['/css/responsive.css', 'async' => 'true'],
        ['/css/custom.css?v=7.8', 'async' => true],
    ];
    public $js = [
        '/js/jquery-3.4.1.min.js',
        '/js/react.production.js',
        '/js/react.dom.js',
        'js/antd.js',
        '/js/babel.min.js',
        '/js/aos.js',
        //'https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js',
        '/js/axios.min.js',
        '/js/bootstrap.min.js',
        '/js/moment/moment.js',
        '/js/modernizr.custom.js',
        '/js/jquery.easing.js',
        '/js/jquery.appear.js',
        '/js/jquery.scrollto.js',
        '/js/menu.js',
        '/js/materialize.js',
        '/js/tweenmax.min.js',
        #'/js/slideshow.js',
        '/js/imagesloaded.pkgd.min.js',
        '/js/isotope.pkgd.min.js',
        '/js/jquery.flexslider.js',
        '/js/owl.carousel.min.js',
        '/js/jquery.magnific-popup.min.js',
        '/js/hero-form.js',
        '/js/pdf.js',
        '/js/contact-form.js?v=1.2',
//        '/js/comment-form.js',
//        '/js/booking-form.js',
        '/js/jquery.datetimepicker.full.js',
        '/js/jquery.validate.min.js',
        '/js/jquery.desoslide.min.js',
        '/js/custom.js?v=1.2',
        '/js/site.js?v=2.4',
        ['/js/action.js?v=1.5', 'type' => 'text/babel'],
        ['/js/cart.js', 'type' => 'text/babel']
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
