<?php


namespace backend\modules\controllers;


use common\helper\HelperFunction;
use common\models\User;
use common\models\UserModel;
use common\models\UserSearch;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;

class UserController extends BaseActiveFilterController
{
    public $modelClass = UserModel::class;

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['update']);
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function actionUpdate()
    {
        $model = UserModel::findOne(\Yii::$app->request->post('id'));
        if (!$model) {
            throw new BadRequestHttpException("User not found!");
        }
        $model->email = \Yii::$app->request->post('email');
        $model->username = \Yii::$app->request->post('username');
        $model->status = \Yii::$app->request->post('status');
        if (\Yii::$app->request->post('new_password_hash')) {
            $model->password_hash = $model->setPassword(\Yii::$app->request->post('new_password_hash'));
        }
        if (!$model->save()) {
            throw new BadRequestHttpException(HelperFunction::firstError($model));
        }
        return $model;
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new UserSearch();
        return $searchModel->search(\Yii::$app->request->queryParams, $filter);
    }

}
