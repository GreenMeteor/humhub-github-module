<?php

namespace humhub\modules\github\widgets;

use Yii;
use yii\base\Widget;

class GithubFrame extends Widget
{

    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        Yii::$app->getModule('github');
        return $this->render('githubframe', []);
    }
}
