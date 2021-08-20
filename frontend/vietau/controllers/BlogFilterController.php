<?php


namespace vietau\controllers;


use common\models\ArchivesSearch;
use common\models\Articles;
use common\models\ArticlesSearch;

class BlogFilterController extends BaseFilterController
{

    public $modelClass = Articles::class;

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
        $searchModel = new ArticlesSearch();

        return $searchModel->search(\Yii::$app->request->queryParams, $filter);
    }
}
