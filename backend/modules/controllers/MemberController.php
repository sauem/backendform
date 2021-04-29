<?php


namespace backend\modules\controllers;


use common\models\Member;

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
        $searchModel = new Member();
        return $searchModel->search(\Yii::$app->request->queryParams);
    }

}
