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
        ['https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css', 'async' => 'async'],
        ['https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', 'async' => 'async'],
        ['https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', 'async' => 'async'],
        ['/css/fontawesome.all.css', 'async' => 'async'],
        ['/css/menu.css', 'async' => 'async'],
        ['https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css', 'async' => 'async'],
        ['/css/fade-down.css', 'media' => 'all', 'id' => 'effect'],
        ['https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css', 'async' => 'async'],
        // ['/css/flexslider.css', 'async' => 'async'],
       // ['/css/jquery.desoslide.min.css', 'async' => 'async'],
        ['https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css', 'async' => 'async'],
        ['https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css', 'async' => 'async'],
        // ['https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css', 'async' => 'async'],
        //['/css/fontawesome.min.css', 'async' => 'async'],
        ['/css/pink-theme.min.css?v=1.7', 'async' => 'async'],
        ['/css/responsive.css', 'async' => 'async'],
        ['/css/custom.css?v=2.7', 'async' => 'async'],
    ];
    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',
        //['https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/js/all.min.js', 'defer'],
        ['https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', 'defer'],
        ['https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js', 'defer'],
        'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js',
        ['https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', 'defer'],
        ['https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.4.1/jquery.appear.min.js', 'defer'],
        ['https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollto/1.4.6/jquery-scrollto.min.js', 'defer'],
       // ['https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js', 'defer'],
        '/js/menu.js?v=1.2',
        //'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js',
        //'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js',
        //'/js/hero-form.js',
        '/js/contact-form.js?v=1.2',
        '/js/lazyload.min.js',
        ['https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js', 'defer'],
       // ['/js/jquery.desoslide.min.js'],
        //'https://cdnjs.cloudflare.com/ajax/libs/lazyloadjs/3.2.2/lazyload.min.js',
        '/js/custom.js?v=1.6',
        '/js/site.js?v=2.5',
        ['/js/action.js?v=1.6', 'type' => 'text/babel'],
        // ['/js/cart.js', 'type' => 'text/babel']
    ];

    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];

}
