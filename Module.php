<?php

namespace humhub\modules\github;

use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    public $resourcesPath = 'resources';

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to([
                    '/github/admin'
        ]);
    }

}
