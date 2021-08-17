<?php

namespace usvn\controllers;

use common\helper\HelperFunction;
use common\models\Archives;
use common\models\ArchivesSearch;
use common\models\Articles;
use common\models\ArticlesSearch;
use common\models\Contact;
use common\models\Products;
use common\models\ProductsSearch;
use usvn\controllers\BaseController;
use Yii;
use yii\db\Expression;
use yii\web\BadRequestHttpException;
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
        $articles = Articles::find()
            ->where([
                'show_home' => 1,
                'language' => HelperFunction::getLanguage(),
                'status' => Articles::STATUS_ACTIVE
            ])->limit(4)->orderBy('created_at DESC')->all();
        $products = Products::find()
            ->where([
                'status' => Articles::STATUS_ACTIVE,
                'language' => HelperFunction::getLanguage()
            ])->limit(9)->orderBy('created_at DESC')->all();
        return $this->render('index.blade', [
            'posts' => $articles,
            'products' => $products,
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
        $related = Products::find()
            //->where(['default_archive' => $archive->id])
            // ->orWhere(['id' => $model->relations])
            // ->andFilterWhere(['!=', 'id', $model->id])
            ->limit(12)->all();
        return $this->render('contact.blade', [
            'model' => $model,
            'related' => $related
        ]);
    }

    public function actionSwitchLanguage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        if (Yii::$app->request->isPost) {
            $lang = Yii::$app->request->post('lang') == 'en' ? 'en' : 'vi-VN';
            Yii::$app->cache->set('language', $lang);
            Yii::$app->language = $lang;
            return "TRAN TO: " . Yii::$app->language;//Yii::$app->request->post('lang');
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
        return $this->render('shop-list.blade', [
            'model' => null,
        ]);
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

    public function actionArchive($archive)
    {
        if (!$archive) {
            return $this->actionShop();
        }
        $model = Archives::findOne(['slug' => $archive]);
        if (!$model) {
            throw new BadRequestHttpException('Không tồn tại danh mục!');
        }
        if (!$model->parent_id && $model->type === Archives::STYLE_PRODUCT) {
            return $this->render('shop.blade', [
                'model' => $model
            ]);
        }
        //default template
        $categories = Archives::find()
            ->where([
                'language' => HelperFunction::getLanguage(),
                'type' => Archives::STYLE_BLOG
            ])
            ->limit(6)
            ->orderBy('id DESC')
            ->all();
        $latestBlog = Articles::find()
            ->where([
                'language' => HelperFunction::getLanguage(),
            ])
            ->andFilterWhere(['!=', 'archive_id', $model->id])
            ->limit(5)
            ->orderBy('id DESC')
            ->all();
        switch ($model->type) {
            case Archives::STYLE_PRODUCT:
                $modelSearch = new ProductsSearch();
                $dataProvider = $modelSearch->search(Yii::$app->request->queryParams);
                $template = 'product-archive.blade';
                break;
            default:

                $template = 'blog-archive.blade';
                $modelSearch = new ArchivesSearch();
                $dataProvider = $modelSearch->search(Yii::$app->request->queryParams, [
                    'default_archive' => $model->id
                ]);
                break;
        }

        return $this->render($template, [
            'model' => $model,
            'dataProvider' => $dataProvider,
            'categories' => $categories,
            'latestBlog' => $latestBlog,
        ]);
    }

    public function actionDetail($archive, $slug)
    {
        $archive = Archives::findOne(['slug' => $archive]);
        if (!$archive) {
            throw new BadRequestHttpException('Không tồn tại trang!');
        }
        switch ($archive->type) {
            case Archives::STYLE_PRODUCT:
                $template = 'product-detail.blade';
                $model = Products::findOne(['slug' => $slug]);
                if (!$model) {
                    throw new BadRequestHttpException('Không tồn tại sản phẩm!');
                }
//                $related = Products::find()
//                    ->where(['default_archive' => $archive->id])
//                    ->orWhere(['id' => $model->relations])
//                    ->andFilterWhere(['!=', 'id', $model->id])
//                    ->limit(12)->all();
                break;
            default:
                $template = 'blog-detail.blade';
                if ($slug === 'cau-chuyen-janami') {
                    $template = 'cau-chuyen-janami.blade';
                }
                $model = Articles::findOne(['slug' => $slug]);
                if (!$model) {
                    throw new BadRequestHttpException('Không tồn tại sản phẩm!');
                }
//                $related = Articles::find()
//                    ->where(['archive_id' => $model->archive_id])
//                    ->andFilterWhere(['!=', 'id', $model->id])
//                    ->limit(12)->all();

                break;
        }
        if (!$model) {
            throw new BadRequestHttpException('Không tồn tại trang!');
        }

        $categories = Archives::find()
            ->where([
                'language' => HelperFunction::getLanguage()
            ])->limit(6)
            ->orderBy('id DESC')
            ->all();
        $latestBlog = Articles::find()
            ->where([
                'language' => HelperFunction::getLanguage(),
            ])
            ->andFilterWhere(['!=', 'id', $model->id])
            ->limit(5)
            ->orderBy('id DESC')
            ->all();
        $related = Products::find()
            //->where(['default_archive' => $archive->id])
            // ->orWhere(['id' => $model->relations])
            // ->andFilterWhere(['!=', 'id', $model->id])
            ->limit(12)->all();
        return $this->render($template, [
            'model' => $model,
            'categories' => $categories,
            'latestBlog' => $latestBlog,
            'related' => $related
        ]);
    }

}
