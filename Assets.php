<?php

namespace humhub\modules\github;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $publishOptions = [
        'forceCopy' => true
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/resources';
        parent::init();
    }
}
