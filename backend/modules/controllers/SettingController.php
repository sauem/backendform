<?php


namespace backend\modules\controllers;


use common\helper\HelperFunction;
use common\models\Common;
use yii\web\BadRequestHttpException;
use yii2mod\settings\models\enumerables\SettingType;

class SettingController extends BaseActiveController
{
    public $modelClass = Common::class;

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['create']);
        unset($actions['update']);
        unset($actions['index']);
        return $actions;
    }

    public function actionIndex()
    {
        return \Yii::$app->settings->getAllBySection('Common');
    }

    public function actionCreate()
    {
        try {
            $commons = \Yii::$app->request->post();
            $settings = \Yii::$app->settings;
            if (!empty($commons)) {
                foreach ($commons as $key => $value) {
                    if ($key === 'logo_header_context |logo_footer_context | favicon_context') {
                        continue;
                    }
                    $settings->set('Common', $key, $value);
                    $settings->invalidateCache();
                }
            }
            return [
                'success' => 1
            ];
        } catch (\Exception $exception) {
            throw new BadRequestHttpException($exception->getMessage());
        }
    }

}
