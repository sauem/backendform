<?php


namespace backend\modules\controllers;


use common\models\Technology;
use common\models\TechnologySearch;

class TechnologyController extends BaseActiveFilterController
{
    public $modelClass = Technology::class;
    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new TechnologySearch();
        return $searchModel->search(\Yii::$app->request->queryParams);
    }

}
