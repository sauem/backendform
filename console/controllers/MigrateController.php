<?php


namespace console\controllers;


use common\helper\HelperFunction;
use yii\console\controllers\MigrateController as BasicMigrateController;


class MigrateController extends BasicMigrateController
{
    public function beforeAction($action)
    {
        $db = HelperFunction::getParamDB(\Yii::$app->request->getParams());
        \Yii::$app->set('db', HelperFunction::getDb(false, $db));
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

}