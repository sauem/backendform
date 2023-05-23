<?php


namespace backend\modules\controllers;


use common\models\Medias;
use common\models\MediasSearch;
use yii\base\BaseObject;
use yii\web\BadRequestHttpException;

class BrochureController extends BaseActiveFilterController
{
    public $modelClass = Medias::class;

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['index']);
        unset($actions['delete']);
        return $actions;
    }

    public function actionIndex()
    {
        return Medias::find()
            ->where([
                'type' => 'brochure',
            ])->orderBy('created_at ASC')
            ->all();
    }

    public function actionDelete($id)
    {
        try {
            $media = Medias::findOne($id);
            if ($media) {
                if (file_exists(UPLOAD_PATH . $media->path)) {
                    unlink(UPLOAD_PATH . $media->path);
                }
                return $media->delete();
            }
            return false;
        } catch (\Exception $exception) {
            throw new BadRequestHttpException($exception->getMessage());
        }
    }
}
