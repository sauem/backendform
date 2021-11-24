<?php


namespace backend\controllers;


class GalleryController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index.blade');
    }
}
