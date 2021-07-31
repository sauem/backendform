<?php


namespace janami\controllers;


use common\models\ArchivesSearch;
use common\models\Products;
use common\models\ProductsSearch;

class ArchiveFilterController extends BaseFilterController
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
        $searchModel = new ArchivesSearch();
        return $searchModel->search(\Yii::$app->request->queryParams, $filter);
    }

}
