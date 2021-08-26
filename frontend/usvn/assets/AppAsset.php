<?php

namespace usvn\assets;

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
        'https://unpkg.com/antd/dist/antd.css',
        'https://use.fontawesome.com/releases/v5.11.0/css/all.css',
        '/css/bootstrap.css',
        '/css/owl-carousel/owl.carousel.css',
        '/css/nivo-slider/themes/default/default.css',
        '/css/nivo-slider/nivo-slider.css',
        '/css/masterslider/style/masterslider.css',
        '/css/masterslider/skins/default/style.css',
        '/css/style.css',
        '/css/color-default.css',
        '/css/retina.css',
        '/css/responsive.css',
        '/css/custom.css?v=2.3'
    ];
    public $js = [
        '/js/jquery-2.1.4.min.js',
        ['https://unpkg.com/react@17/umd/react.production.min.js', 'crossorigin'],
        ['https://unpkg.com/react-dom@17/umd/react-dom.production.min.js', 'crossorigin'],
        'https://cdnjs.cloudflare.com/ajax/libs/antd/4.16.0/antd.min.js',
        'https://unpkg.com/@babel/standalone/babel.min.js',
        //'https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js',
        '//cdn.jsdelivr.net/npm/sweetalert2@11',
        '/js/bootstrap.min.js',
        '/js/jquery.srcipts.min.js',
        '/js/owl-carousel/owl.carousel.min.js',
        '/js/nivo-slider/jquery.nivo.slider.js',
        '/js/jCarouselLite.js',
        '/js/masterslider/masterslider.min.js',
        '/js/jquery.dlmenu.min.js',
        '/js/include.js',
        '/js/site.js?v=2.1',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
