<?php

namespace janami\controllers;

use common\helper\HelperFunction;
use common\models\Archives;
use common\models\ArchivesSearch;
use common\models\Articles;
use common\models\ArticlesSearch;
use common\models\Banners;
use common\models\Contact;
use common\models\Member;
use common\models\Products;
use common\models\ProductsSearch;
use janami\controllers\BaseController;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\db\Expression;
use yii\web\BadRequestHttpException;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
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
        return $this->render('index', [
            'sliders' => $sliders,
            'categories' => $categories,
            'articles' => $articles,
            'products' => $products,
            'logos' => $logos,
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
        return $this->render('contact.blade', [
            'model' => $model,
        ]);
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


    public function actionSearch()
    {
        $key = Yii::$app->request->get('s');
        $categories = Archives::find()
            ->filterWhere(['language' => HelperFunction::getLanguage()])
            ->andFilterWhere(['IS', 'parent_id', new Expression('NULL')])
            ->all();
        $productSearch = new ProductsSearch();
        $productProvider = $productSearch->search([
            'ProductsSearch' => [
                'name' => $key
            ]
        ]);

        $articleSearch = new ArticlesSearch();
        $articleProvider = $articleSearch->search([
            'ArticlesSearch' => [
                'name' => $key
            ]
        ]);
        $relatedPosts = Articles::find()->filterWhere(['language' => HelperFunction::getLanguage()])
            ->orderBy('created_at DESC')
            ->limit(6)->all();
        return $this->render('search', [
            'categories' => $categories,
            'productProvider' => $productProvider,
            'articleProvider' => $articleProvider,
            'relatedPosts' => $relatedPosts
        ]);
    }

    public function actionShop()
    {
        return $this->render('shop.blade');
    }

    public function actionFaqs()
    {
        return $this->render('faqs.blade');
    }

    public function actionArticles()
    {
        return $this->render('articles.blade');
    }

    public function actionCart()
    {
        return $this->render('cart.blade');
    }

    public function actionCheckout()
    {
        return $this->render('checkout.blade');
    }

    public function actionArchiveProduct($archive, $slug)
    {
        $temp = 'product-detail.blade';
        $product = Products::findOne(['slug' => $slug]);
        if (!$product) {
            $temp = 'product-archive.blade';
        }
        $category = Archives::findOne(['slug' => $archive]);
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(array_merge_recursive(Yii::$app->request->queryParams, [
            'ProductsSearch' => [
                'archives' => $category->id
            ]
        ]));
        return $this->render($temp, [
            'dataProvider' => $dataProvider,
            'model' => $product
        ]);
    }

    public function actionArchiveBlog($archive, $slug)
    {
        $view = 'blog-archive.blade';
        $category = Archives::findOne(['slug' => $slug]);
        if (!$category) {
            $category = Archives::findOne(['slug' => $archive]);
            if (!$category) {
                throw new NotFoundHttpException('Không tìm thấy danh mục!');
            }
        }
        $blogs = new ArticlesSearch();
        $blogs = $blogs->search(array_merge_recursive(Yii::$app->request->queryParams, [
            'ArticlesSearch' => [
                'archive_id' => $archive->id
            ]
        ]));
        return $this->render('blog-archive.blade', [
            'blogs' => $blogs
        ]);
    }

}
