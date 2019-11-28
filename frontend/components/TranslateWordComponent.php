<?php


namespace frontend\components;


use yii\helpers\Inflector;

class TranslateWordComponent
{
    public function translateWord()
    {
        $str = 'Купи слона';
        $str = Inflector::slug($str, ' ', false);
        echo $str;
    }
}