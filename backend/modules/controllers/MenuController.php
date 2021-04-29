<?php


namespace backend\modules\controllers;


use common\helper\HelperFunction;
use common\models\MenuConfig;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;

class MenuController extends BaseActiveFilterController
{

    public $modelClass = MenuConfig::class;

    public function actions()
    {
        $actions = parent::actions(); // TODO: Change the autogenerated stub
        unset($actions['create']);
        unset($actions['index']);
        return $actions;
    }

    public function actionCreate()
    {
        try {
            $post = \Yii::$app->request->post();
            $model = MenuConfig::findOne([
                'name' => ArrayHelper::getValue($post, 'name'),
                'language' => ArrayHelper::getValue($post, 'language')
            ]);
            if (!$model) {
                $model = new MenuConfig();
                $model->language = ArrayHelper::getValue($post, 'language');
                $model->name = ArrayHelper::getValue($post, 'name');
            }
            $items = ArrayHelper::getValue($post, 'items');
            $model->items = $items;
            if (!$model->save()) {
                throw new BadRequestHttpException(HelperFunction::firstError($model));
            }
            return true;
        } catch (\Exception $exception) {
            throw new BadRequestHttpException($exception->getMessage());
        }
    }

    /**
     * @return MenuConfig
     * @throws NotFoundHttpException
     */
    public function actionIndex()
    {
        $name = \Yii::$app->request->get('name');
        $language = \Yii::$app->request->get('language');

        $model = MenuConfig::findOne(['name' => $name, 'language' => $language]);
        if (!$model) {
            throw new NotFoundHttpException('Không tìm thấy menu!');
        }
        return $model;
    }
}
