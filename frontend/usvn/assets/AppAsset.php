<?php

namespace frontend\usvn\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;800;900&amp;family=Roboto:wght@400;700&amp;display=swap',
        '/usvn/css/all.css',
        '/usvn/css/libraries.css',
        '/usvn/css/style.css?v=1.1',
        '/usvn/css/magnific-popup.css',
        '/usvn/css/custom.css?v=1.6',
    ];
    public $js = [
        '//cdn.jsdelivr.net/npm/sweetalert2@10',
        '/usvn/js/const.js',
        '/usvn/js/handlebars.js',
        '/usvn/js/handlebars-helper.js',
        '/usvn/js/plugins.js',
        '/usvn/js/jquery.magnific-popup.min.js',
        '/usvn/js/main.js?v=1.2',
        '/usvn/js/templ.js?v=2.9',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        #  'yii\bootstrap\BootstrapAsset',
    ];
}
