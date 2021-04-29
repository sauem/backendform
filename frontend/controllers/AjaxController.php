<?php


namespace frontend\controllers;


use common\helper\HelperFunction;
use common\models\Contact;
use frontend\models\ContactForm;
use yii\web\BadRequestHttpException;
use yii\web\Response;

class AjaxController extends BaseController
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        \Yii::$app->response->format = Response::FORMAT_JSON;
    }

    /**
     * @return bool
     * @throws BadRequestHttpException
     */
    function actionCreateBrief()
    {
        $contact = new Contact();
        if (\Yii::$app->request->isPost) {
            try {
                if ($contact->load(\Yii::$app->request->post())) {
                    if (!$contact->save()) {
                        throw new BadRequestHttpException(HelperFunction::firstError($contact));
                    }
                    return true;
                }
            } catch (\Exception $exception) {
                throw new BadRequestHttpException($exception->getMessage());
            }
        }
        return false;
    }
}
