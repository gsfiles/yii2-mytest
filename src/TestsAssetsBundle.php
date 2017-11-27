<?php
/**
 * Created by PhpStorm.
 * User: RAF
 * Date: 27.11.2017
 * Time: 14:35
 */

namespace gsfiles\mytest;

use yii\web\AssetBundle;

class TestsAssetsBundle extends AssetBundle
{
    public $sourcePath = '@vendor/gsfiles/yii2-mytest/assets';
    public $css = [
        'css/style.css'
    ];
}