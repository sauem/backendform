<?php


namespace backend\modules\controllers;


use common\helper\HelperFunction;
use common\models\Articles;
use common\models\ArticlesSearch;
use common\models\Galleries;
use common\models\GalleriesSearch;
use common\models\Medias;
use common\models\SeoMeta;
use Composer\DependencyResolver\Transaction;
use yii\base\BaseObject;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;
use function Webmozart\Assert\Tests\StaticAnalysis\null;

class GalleryController extends BaseActiveFilterController
{
    public $modelClass = Galleries::class;

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['create']);
        unset($actions['delete']);
        unset($actions['update']);
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function actionDelete($id)
    {
        try {
            $transaction = \Yii::$app->db->beginTransaction(\yii\db\Transaction::SERIALIZABLE);
            $model = Galleries::findOne($id);
            if (!$model) {
                throw new BadRequestHttpException("Không tìm thấy gallery!");
            }
            Medias::deleteAll(['obj_id' => $model->id]);
            if (!$model->delete()) {
                throw new BadRequestHttpException(HelperFunction::firstError($model));
            }
            $transaction->commit();
        } catch (\Exception $exception) {
            $transaction->rollBack();
            throw new BadRequestHttpException($exception->getMessage());
        }
    }

    public function actionCreate()
    {
        try {
            $transaction = \Yii::$app->db->beginTransaction(\yii\db\Transaction::SERIALIZABLE);
            $title = \Yii::$app->request->post('name');
            $slug = \Yii::$app->request->post('slug');
            $thumbs = \Yii::$app->request->post('thumb');
            $media_id = \Yii::$app->request->post('media_id');
            $description = \Yii::$app->request->post('description');

            $gallery = new Galleries();
            $gallery->media_id = $media_id;
            $gallery->name = $title;
            $gallery->description = $description;
            $gallery->slug = $slug;
            if (!$gallery->save()) {
                throw new BadRequestHttpException(HelperFunction::firstError($gallery));
            }
            if ($gallery->media_id !== null) {
                array_push($thumbs, $gallery->media_id);
            }
            Medias::updateAll(['obj_id' => $gallery->id], ['id' => $thumbs]);
            $transaction->commit();
        } catch (\Exception $exception) {
            $transaction->rollBack();
            throw new BadRequestHttpException($exception->getMessage());
        }
    }

    public function actionUpdate($id)
    {
        try {
            $transaction = \Yii::$app->db->beginTransaction(\yii\db\Transaction::SERIALIZABLE);
            $title = \Yii::$app->request->post('name');
            $slug = \Yii::$app->request->post('slug');
            $thumbs = \Yii::$app->request->post('thumb');
            $media_id = \Yii::$app->request->post('media_id');
            $description = \Yii::$app->request->post('description');

            $gallery = Galleries::findOne($id);
            if (!$gallery) {
                throw new BadRequestHttpException("Không tìm thấy gallery!");
            }
            $gallery->media_id = $media_id;
            $gallery->name = $title;
            $gallery->description = $description;
            $gallery->slug = $slug;
            if (!$gallery->save()) {
                throw new BadRequestHttpException(HelperFunction::firstError($gallery));
            }
            if ($gallery->media_id !== null) {
                array_push($thumbs, $gallery->media_id);
            }
            Medias::updateAll(['obj_id' => $gallery->id], ['id' => $thumbs]);
            $transaction->commit();
        } catch (\Exception $exception) {
            $transaction->rollBack();
            throw new BadRequestHttpException($exception->getMessage());
        }
    }

    public function prepareDataProvider($action, $filter)
    {
        $searchModel = new GalleriesSearch();
        return $searchModel->search(\Yii::$app->request->queryParams);
    }
}
