<?php

namespace frontend\brouchure\controllers;

use common\helper\HelperFunction;
use common\models\Archives;
use common\models\ArchivesSearch;
use common\models\Articles;
use common\models\ArticlesSearch;
use common\models\Banners;
use common\models\Contact;
use common\models\Medias;
use common\models\Member;
use common\models\Products;
use common\models\ProductsSearch;
use common\models\Testimonials;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\db\Expression;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends BaseController
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $sliders = Banners::findAll([
            'active' => Banners::BANNER_ACTIVE,
            'position' => 'home_slider',
            'language' => HelperFunction::getLanguage()
        ]);
        $categories = ArchivesSearch::findAll([
            'active' => Archives::STATUS_ACTIVE,
            'language' => HelperFunction::getLanguage()
        ]);
        $articles = Articles::find()
            ->where([
                'language' => HelperFunction::getLanguage(),
                'status' => Articles::STATUS_ACTIVE
            ])->limit(6)->orderBy('created_at DESC')->all();
        $products = Products::find()
            ->where([
                'status' => Articles::STATUS_ACTIVE,
                'language' => HelperFunction::getLanguage()
            ])->limit(6)->orderBy('created_at DESC')->all();
        $contactForm = new Contact();
        $logos = Banners::findAll([
            'active' => Banners::BANNER_ACTIVE,
            'position' => 'logo_partner'
        ]);
        $testimonials = Testimonials::find()
            ->where([
                'language' => HelperFunction::getLanguage()
            ])
            ->all();
        return $this->render('index.blade', [
            'sliders' => $sliders,
            'categories' => $categories,
            'articles' => $articles,
            'products' => $products,
            'logos' => $logos,
            'testimonials' => $testimonials,
            'contactForm' => $contactForm
        ]);
    }


    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new Contact();
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


    public function actionSwitchLanguage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        if (Yii::$app->request->isPost) {
            $lang = Yii::$app->request->post('lang') == 'en' ? 'en' : 'vi-VN';
            Yii::$app->cache->set('language', $lang);
            Yii::$app->language = $lang;
            return Yii::$app->language;
        }
        return false;
    }

    public function actionArchive($archive)
    {
        $model = Archives::findOne(['slug' => $archive]);
        if (!$model) {
            throw new NotFoundHttpException("Trang không tồn tại!");
        }
        $template = 'blog-archive.blade';
        switch ($model->type) {
            case Archives::STYLE_BLOG:
                $modelSearch = new ArticlesSearch();
                $dataProvider = $modelSearch->search(Yii::$app->request->queryParams);
                break;
            default:
                $modelSearch = new ProductsSearch();
                $dataProvider = $modelSearch->search(Yii::$app->request->queryParams);
                break;
        }
        return $this->render($template, [
            'model' => $model,
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionServices()
    {
        $members = Member::find()->all();
        return $this->render('services', [
            'services' => $members
        ]);
    }

}
