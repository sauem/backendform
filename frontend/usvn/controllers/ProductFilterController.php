<?php


namespace usvn\controllers;


use common\models\Products;
use common\models\ProductsSearch;

class ProductFilterController extends BaseFilterController
{
    public $modelClass = Products::class;
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
        $searchModel = new ProductsSearch();
        return $searchModel->search(\Yii::$app->request->queryParams, $filter);
    }

}
