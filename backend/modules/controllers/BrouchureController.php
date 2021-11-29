<?php


namespace backend\modules\controllers;


use common\models\Medias;
use common\models\MediasSearch;
use yii\base\BaseObject;

class BrouchureController extends BaseActiveFilterController
{
    public $modelClass = Medias::class;

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new MediasSearch();
        return $searchModel->search(\Yii::$app->request->queryParams, $filter);
    }
}
