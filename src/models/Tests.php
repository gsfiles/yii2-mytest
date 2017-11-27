<?php
/**
 * Created by PhpStorm.
 * User: RAF
 * Date: 27.11.2017
 * Time: 14:25
 */

namespace gsfiles\mytest\models;
use Yii;
use yii\db\ActiveRecord;
class Tests extends ActiveRecord{
    public function rules()
    {
        return [
            [['ip'], 'ip'],
            [['comment'], 'required'],
        ];
    }
}