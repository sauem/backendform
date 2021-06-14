<?php


namespace backend\controllers;


class BillingController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index.blade');
    }
}
