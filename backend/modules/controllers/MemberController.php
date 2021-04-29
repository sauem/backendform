<?php


namespace backend\modules\controllers;


use common\models\Member;
use common\models\MemberSearch;

class MemberController extends BaseActiveFilterController
{
    public $modelClass = Member::class;

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new MemberSearch();
        return $searchModel->search(\Yii::$app->request->queryParams);
    }

}
