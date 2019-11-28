<?php


namespace frontend\components;


use yii\helpers\StringHelper;

class StringHelperComponent
{
    public function strCut($str, $count)
    {
        $str = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. A cras semper auctor neque vitae. Senectus et netus et malesuada';
        $count = 12;
        $str = StringHelper::truncateWords($str, $count);
        echo $str;
    }
}