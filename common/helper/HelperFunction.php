<?php

namespace common\helper;

use common\models\Archives;
use common\models\Medias;
use yii\console\Application;
use yii\helpers\ArrayHelper;

class HelperFunction
{

    static function checkImage($image)
    {
        $url = str_replace("/static", "", $image);
        $exist = file_exists(UPLOAD_PATH . $url);
        if (!$image || !$exist) {
            return "/img/default.png";
        }
        return $image;
    }

    static function params($key)
    {
        $params = \Yii::$app->params;
        return ArrayHelper::getValue($params, $key . "_" . HelperFunction::getLanguage(), '');
    }

    static function getHost($frontend = false, $db = null)
    {
        $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $db;
        $domain = preg_replace('/\.|\//', '', $host);
        if ($frontend) {
            return $domain;
        }
        $domain = substr($domain, 5);
        return $domain;
    }

    static function getFrontend($link = '')
    {
        $domain = preg_replace('/admin\.|\//', '', $_SERVER['HTTP_HOST']);
        return "http://$domain$link";
    }

    static function getDomain()
    {
        if (\Yii::$app instanceof Application) {
            return 'console';
        }
        $domain = preg_replace('/\.|\//', '', $_SERVER['HTTP_HOST']);
        $domain = str_replace('admin', '', $domain);
        $domain = str_replace('www', '', $domain);
        return $domain;
    }

    static function getDb($frontend = false, $name = null)
    {
        if (!$frontend && $name !== null) {
            return ArrayHelper::getValue(\Yii::$app->components, $name);
        }
        return ArrayHelper::getValue(\Yii::$app->components, HelperFunction::getDomain($frontend));
    }

    static function getImage($path = '', $id = null, $type = '')
    {
        if ($path) {
            return "/static$path";
        }
        $model = Medias::findOne($id);
        if (!$model) {
            return "/static/$path";
        }
        return "/static/$model->path";
    }

    static function printf($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
        exit;
    }

    static function firstError($model)
    {
        $modelErrs = $model->getFirstErrors();
        foreach ($modelErrs as $err) {
            return $err;
        }
        return "No error founded";
    }

    public static function getMedia($id)
    {
        $media = Medias::findOne($id);
        if (!$media) {
            return '/theme/images/logo.png';
        }
        return "/static/$media->path";
    }

    public static function getMediaSetting($key)
    {
        $logo = \Yii::$app->settings->get('Common', "$key");
        if (!$logo) {
            return '';
        }
        $model = Medias::findOne($logo);
        if (!$model) {
            return '';
        }
        return "/static$model->path";
    }

    public static function cache()
    {

    }

    public static function setting($key, $getLang = false)
    {
        $lang = \Yii::$app->language;
        if ($lang == 'en' && $getLang) {
            return \Yii::$app->settings->get('Common', "{$key}_{$lang}");
        }
        return \Yii::$app->settings->get('Common', $key);
    }

    public static function getLogo($key = 'header')
    {
        $logo = \Yii::$app->settings->get('Common', "logo_$key");
        if (!$logo) {
            return '/usvn/images/logo/USVN.png';
        }
        $model = Medias::findOne($logo);
        if (!$model) {
            return '/usvn/images/logo/USVN.png';
        }
        return "/static$model->path";
    }

    public static function Favicon()
    {
        $favicon = static::setting('favicon');
        $model = Medias::findOne($favicon);
        if ($model) {
            return "/static/$model->path";
        }
        return '';
    }

    public static function Language($lang = 'vi')
    {
        return \Yii::$app->language == $lang;
    }

    public static function getLanguage()
    {
        return \Yii::$app->language === 'vi-VN' ? 'vi' : 'en';
    }

    public static function archiveLink($archive)
    {
        if ($archive->type === Archives::STYLE_PRODUCT) {
            return "/san-pham/$archive->slug";
        }
        return $archive->slug;
    }

    public static function blogLink($blog)
    {
        if ($blog->archive) {
            return "{$blog->archive->slug}/{$blog->slug}";
        }
        return "$blog->slug";
    }

    public static function productLink($product, $goArchive = false)
    {
        if ($product->defaultArchive) {
            if ($goArchive) {
                return "/san-pham/{$product->defaultArchive->slug}";
            }
            return "/san-pham/{$product->defaultArchive->slug}/{$product->slug}";
        }
        return "$product->slug";
    }

    public static function Link($type = BLOG, $slug = '', $archive = '')
    {
        if (is_array($slug)) {
            switch ($slug['type']) {
                case 'custom':
                    return ArrayHelper::getValue($slug, 'slug', '/');
                case 'page':
                    return "/" . ArrayHelper::getValue($slug, 'slug', '/');
                case 'article':
                case 'tin-tuc':
                    return "/" . ($archive ? "$archive/" : '') . $slug['slug'];
                case 'product':
                    return "/san-pham/" . ($archive ? "$archive/" : '') . $slug['slug'];
            }
        }
        return "/" . ($archive ? $archive . '/' : '') . $slug;
    }

    public static function getMenu($name = 'header')
    {
        $menus = \Yii::$app->params['menus'];
        if (!empty($menus)) {
            foreach ($menus as $k => $menu) {
                if ($menu['name'] == $name) {
                    return $menu;
                }
            }
        }
        return false;
    }

    public static function fistArchive($product)
    {
        return $product->firstArchive->archive->slug;
    }

    static function getParamDB($params = [])
    {
        if (!empty($params)) {
            foreach ($params as $param) {
                if (substr($param, 0, 4) == '--db') {
                    return str_replace('--db=', '', $param);
                }
            }
        }
    }

    static function htmlPrice($product)
    {
        if ($product->default_sale_price > 0) {
            return "<span><del><small className={`text-muted`}><b>" . static::number_format($product->default_price) . "đ</b></small></del> <ins>" . static::number_format($product->default_sale_price) . "đ</ins></span>";
        }
        return "";
    }

    static function number_format($num)
    {
        return number_format($num, 0, ',', '.');
    }

    static function getBanner($position, $pages = [], $single = false)
    {
        $banners = \Yii::$app->params['globalBanners'];
        $group = [];
        foreach ($banners as $k => $banner) {
            if ($banner->position === $position && in_array($pages, [$banner->page_show], true)) {
                if ($single) {
                    return $banner;
                }
                array_push($group, $banner);
            }
        }
        return $group;
    }

    static function getParams($key, $lang = '')
    {
        return ArrayHelper::getValue(\Yii::$app->params, $key . $lang);
    }

    static function resize($url, $size = [])
    {
        $img_url = '/img/vthumb.php?src=' . $url . '&size=' . $size[0] . 'x' . $size[1] . '&zoom=1&q=90';
        return $img_url;
    }

    static function currentURL()
    {
        return \Yii::$app->request->url;
    }
}
