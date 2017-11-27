<?php

namespace gsfiles\mytest\controllers;
use gsfiles\mytest\TestsAssetsBundle;
use Yii;
use yii\web\Controller;
use gsfiles\mytest\models\Tests;

/**
 * Created by PhpStorm.
 * User: RAF
 * Date: 27.11.2017
 * Time: 14:16
 */

class TestController extends Controller
{
    public $layout = 'main';
    public function actionIndex()
    {
        // регистрируем ресурсы:
        TestsAssetsBundle::register($this->view);
        $datas = Tests::find()->all();
        return $this->render('index',[
            'datas' => $datas
        ]);
    }
}