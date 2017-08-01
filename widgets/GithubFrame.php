<?php
namespace humhub\modules\github\widgets;

use yii\base\Widget;

class GithubFrame extends Widget
{

    public $contentContainer;

    public function run()
    {

        return $this->render('githubframe', []);
    }
}
