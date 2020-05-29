<?php

namespace fbacks\components\web;

use Yii;

class UrlManager extends yii\web\UrlManager
{
    public $ruleConfig = [
        'class' => 'yii\rest\UrlRule',
    ];
    public $enablePrettyUrl = true;
    public $enableStrictParsing = true;
    public $showScriptName = false;

}