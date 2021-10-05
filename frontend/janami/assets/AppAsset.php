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
        '/css/bootstrap.min.css',
        'https://unpkg.com/antd/dist/antd.css',
        'https://use.fontawesome.com/releases/v5.11.0/css/all.css',
        '/css/flaticon.css',
        '/css/menu.css',
        ['/css/fade-down.css', 'media' => 'all', 'id' => 'effect'],
        '/css/tweenmax.css',
        '/css/magnific-popup.css',
        '/css/owl.carousel.min.css',
        '/css/flexslider.css',
        '/css/jquery.desoslide.min.css',
        '/css/owl.theme.default.min.css',
        '/css/jquery.datetimepicker.min.css',
        '/css/pink-theme.css',
//         '/css/rose-theme.css',
//         '/css/silk-theme.css',
//         '/css/gold-theme.css',
        '/css/responsive.css',
        '/css/custom.css?v=4.1',
    ];
    public $js = [
        '/js/jquery-3.4.1.min.js',
        ['https://unpkg.com/react@17/umd/react.production.min.js', 'crossorigin'],
        ['https://unpkg.com/react-dom@17/umd/react-dom.production.min.js', 'crossorigin'],
        'https://cdnjs.cloudflare.com/ajax/libs/antd/4.16.0/antd.min.js',
        'https://unpkg.com/@babel/standalone/babel.min.js',
        //'https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js',
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
        '/js/contact-form.js',
        '/js/comment-form.js',
        '/js/booking-form.js',
        '/js/jquery.datetimepicker.full.js',
        '/js/jquery.validate.min.js',
        '/js/jquery.desoslide.min.js',
        '/js/custom.js',
        '/js/site.js?v=1.9',
        ['/js/action.js?v=1.4', 'type' => 'text/babel'],
        ['/js/cart.js', 'type' => 'text/babel']
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
