<?php


namespace frontend\components;


use yii\helpers\Inflector;

class ChangeWordComponent
{
    public function changeWord()
    {
        $str = 'created_at';
        $str = Inflector::camelize($str);
        echo $str;
    }
}