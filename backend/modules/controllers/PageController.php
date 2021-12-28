<?php


namespace backend\modules\controllers;


use common\helper\HelperFunction;
use common\models\Medias;
use common\models\Pages;
use common\models\PagesSearch;
use common\models\Products;
use common\models\ProductsArchive;
use common\models\ProductsSearch;
use yii\db\Transaction;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;

class PageController extends BaseActiveFilterController
{
    public $modelClass = Pages::class;

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['create']);
        unset($actions['update']);
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new PagesSearch();
        return $searchModel->search(\Yii::$app->request->queryParams, $filter);
    }

    /**
     * @throws BadRequestHttpException
     */
    public function actionCreate()
    {
        $product = new Pages();
        $transaction = \Yii::$app->getDb()->beginTransaction(Transaction::SERIALIZABLE);
        try {
            $postData = \Yii::$app->request->post();

            $product->load($postData, '');
            if (!$product->save()) {
                throw new BadRequestHttpException(HelperFunction::firstError($product));
            }
            //save avatar
            Medias::saveObj($product->media_id, $product->id, Medias::PRODUCT_TYPE);

            $transaction->commit();
            return $postData;
        } catch (\Exception $exception) {
            $transaction->rollBack();
            throw new BadRequestHttpException($exception->getMessage());
        }
    }

    /**
     * @param $id
     * @return array|mixed|null
     * @throws BadRequestHttpException
     */
    public function actionUpdate($id)
    {
        $product = Pages::findOne($id);
        if (!$product) {
            throw new BadRequestHttpException('Product not found!');
        }
        $transaction = \Yii::$app->getDb()->beginTransaction(Transaction::SERIALIZABLE);
        try {
            $postData = \Yii::$app->request->post();
            $product->load($postData, '');
            if (!$product->save()) {
                throw new BadRequestHttpException(HelperFunction::firstError($product));
            }
            //save avatar
            Medias::saveObj($product->media_id, $product->id, Medias::PRODUCT_TYPE, $product->avatar, $update = true);
            //save archive

            $transaction->commit();
            return $postData;
        } catch (\Exception $exception) {
            $transaction->rollBack();
            throw new BadRequestHttpException($exception->getMessage());
        }
    }
}
