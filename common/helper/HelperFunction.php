<?php


namespace common\helper;


use common\models\Common;
use common\models\Medias;
use yii\console\Application;
use yii\db\ActiveRecord;
use yii\di\Instance;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\BadRequestHttpException;
use function Webmozart\Assert\Tests\StaticAnalysis\null;

class HelperFunction
{

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

    static function getDomain()
    {
        $domain = preg_replace('/\.|\//', '', $_SERVER['HTTP_HOST']);
        $domain = str_replace('admin', '', $domain);
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

    public static function Link($type = BLOG, $slug = '', $archive = '')
    {
        if (is_array($slug)) {
            switch ($slug['type']) {
                case 'custom':
                    return ArrayHelper::getValue($slug, 'key', '/');
                case 'page':
                    return "/" . ArrayHelper::getValue($slug, 'slug', '/');
                case 'article':
                case 'product':
                    return "/" . $slug['type'] . '/' . ($archive ? "$archive/" : '') . $slug['slug'];
                    break;
            }
        }
        return "/$type/" . ($archive ? $archive . '/' : '') . $slug;
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
}
