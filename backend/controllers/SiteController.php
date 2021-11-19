<?php

namespace backend\controllers;

use common\helper\HelperFunction;
use common\models\Common;
use console\controllers\MigrateController;
use Yii;
use yii\console\Application;
use yii\helpers\Url;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\Response;
use yii2mod\settings\actions\SettingsAction;

/**
 * Site controller
 */
class SiteController extends BaseController
{
    public function beforeAction($action)
    {
        if (Yii::$app->controller->action->id === 'settings' && Yii::$app->request->isPost) {
            Yii::$app->response->format = Response::FORMAT_JSON;
        }
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    public function afterAction($action, $result)
    {
        if (Yii::$app->controller->action->id === 'settings' && Yii::$app->request->isPost) {
            //$result = [];
            $result = Yii::$app->request->post();
        }
        return parent::afterAction($action, $result); // TODO: Change the autogenerated stub
    }

    public function actions()
    {
        return array_merge(parent::actions(), [
            'settings' => [
                'class' => SettingsAction::class,
                'viewParams' => [],
                'view' => 'settings.blade',
                'on beforeSave' => function ($event) {
                    foreach ($event->form->attributes as $key => $attribute) {
                        if (empty($attribute)) {
                            Yii::$app->settings->remove("Common", $key);
                        }
                    }
                },
                'on afterSave' => function ($event) {

                },
                'modelClass' => Common::class,
            ],
        ]);
    }

    public function authUnRequired()
    {
        return ['login', 'command']; // TODO: Change the autogenerated stub
    }

    public function authRequired()
    {
        return [
            'index', 'settings', 'logout', 'menu', 'contact', 'testimonial',
            'member','setting-content'
        ]; // TODO: Change the autogenerated stub
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index.blade');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank.blade';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login.blade', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect('/site/login');
    }

    public function actionMenu()
    {
        return $this->render('menu.blade');
    }

    public function actionTestimonial()
    {
        return $this->render('testimonial.blade');
    }

    public function actionContact()
    {
        return $this->render('contact.blade');
    }

    public function actionMember()
    {
        return $this->render('member.blade');
    }

    public function actionSettingContent()
    {
        return $this->render('setting-content.blade');
    }

}
