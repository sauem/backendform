<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/antd.css',
        '/js/lib/flag-icon-css/css/flag-icon.min.css',
        '/js/lib/gaxon-icon/style.css',
        '/js/lib/perfect-scrollbar/css/perfect-scrollbar.css',
        '/js/lib/summernote/dist/summernote-bs4.css',
        '/css/nestable.min.css',
        '/css/lite-style-1.min.css',
        '/css/customize.css?v=1.4',
    ];
    public $js = [
        '/js/lib/react.js',
        '/js/lib/dom.js',
        '/js/lib/babel.js',
        '/js/lib/antd.min.js',
        ['https://cdn.tiny.cloud/1/bwviu44ilqtih5h1vanqtw0bertszzet7egby42u7sp8xh6v/tinymce/6/tinymce.min.js', 'referrerpolicy' => 'origin'],
        '/js/lib/nestable.min.js',
        '/js/lib/axios.js',
        '/js/helper/Constant.js?v=1.9',
        '/js/helper/Helper.js?v=3.6',
        '/js/helper/Actions.js?v=2.2',
        '/js/lib/redux.js',
        '/js/lib/moment-with-locales.js',
        '/js/lib/moment/moment.js',
        '/js/lib/summernote/dist/summernote-bs4.js',
        '/js/lib/bootstrap/dist/js/bootstrap.bundle.min.js',
        '/js/lib/perfect-scrollbar/dist/perfect-scrollbar.min.js',
        '/js/lib/masonry-layout/dist/masonry.pkgd.min.js',
        '/js/lib/sweetalert2/dist/sweetalert2.js',
        '/js/script.js',
        '/js/upload.js?v=1.5',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
