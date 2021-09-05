<?php


namespace backend\modules\controllers;


use common\models\Contact;
use common\models\ContactSearch;
use common\models\Poll;
use common\models\PollSearch;

class PollController extends BaseActiveFilterController
{
    public $modelClass = Contact::class;

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new PollSearch();
        return $searchModel->search(\Yii::$app->request->queryParams);
    }
}
