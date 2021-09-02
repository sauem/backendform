<?php

namespace usvn\controllers;

use common\helper\HelperFunction;
use common\models\Archives;
use common\models\ArchivesSearch;
use common\models\Articles;
use common\models\ArticlesSearch;
use common\models\Banners;
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
            ])
            ->limit(24)->orderBy('attr_text ASC')->all();
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
        $products = Products::find()
            ->where([
                'language' => HelperFunction::getLanguage()
            ])->orderBy('attr_text ASC')->all();

        $sliders = Banners::findAll([
            'active' => Banners::BANNER_ACTIVE,
            'position' => 'home_slider',
            'language' => HelperFunction::getLanguage()
        ]);
        foreach ($sliders as $k => $slider) {
            if (!in_array('product', $slider['page_show'])) {
                unset($sliders[$k]);
            }
        }
        return $this->render('shop-list.blade', [
            'model' => null,
            'sliders' => $sliders,
            'products' => $products
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
                $modelSearch = new ArticlesSearch();
                $dataProvider = $modelSearch->search(Yii::$app->request->queryParams, [
                    'archive_id' => $model->id
                ]);
                break;
        }
        $related = Products::find()
            ->where([
                'language' => HelperFunction::getLanguage(),
            ])
            ->limit(12)->all();
        return $this->render($template, [
            'model' => $model,
            'dataProvider' => $dataProvider,
            'categories' => $categories,
            'latestBlog' => $latestBlog,
            'related' => $related
        ]);
    }

    public function actionDetail($archive, $slug)
    {
        $archive = Archives::findOne(['slug' => $archive]);
        $relatedDetail = [];
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
                $relatedDetail = Products::find()
                    ->where(['default_archive' => $archive->id])
                    ->orWhere(['id' => $model->relations])
                    ->andFilterWhere(['!=', 'id', [$model->id, 74]])
                    ->limit(4)->all();
                break;
            default:
                $template = 'blog-detail.blade';
                if (in_array($slug, \Yii::$app->params['temp_pages'])) {
                    $template = "$slug.blade";
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
            ->where([
                'language' => HelperFunction::getLanguage(),
            ])
            //->where(['default_archive' => $archive->id])
            // ->orWhere(['id' => $model->relations])
            // ->andFilterWhere(['!=', 'id', $model->id])
            ->limit(12)->all();


        return $this->render($template, [
            'model' => $model,
            'categories' => $categories,
            'latestBlog' => $latestBlog,
            'related' => $related,
            'relatedDetail' => $relatedDetail
        ]);
    }


    public function actionYKien()
    {
        $related = Products::find()
            ->where([
                'language' => HelperFunction::getLanguage(),
            ])
            ->orderBy('attr_text ASC')
            ->limit(12)->all();

        return $this->render('y-kien.blade', [
            'related' => $related
        ]);
    }

    public function actionHeThong()
    {
        $related = Products::find()
            ->where([
                'language' => HelperFunction::getLanguage(),
            ])
            ->limit(12)->all();

        return $this->render('he-thong-pp.blade', [
            'related' => $related
        ]);
    }

    public function actionThuVien()
    {
        $related = Products::find()
            ->where([
                'language' => HelperFunction::getLanguage(),
            ])
            ->limit(12)->all();

        return $this->render('thu-vien.blade', [
            'related' => $related,
            'title' => Yii::t('app-usvn', 'library')
        ]);
    }

}
