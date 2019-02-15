<?php

namespace humhub\modules\github;

use Yii;
use yii\helpers\Url;
use humhub\modules\github\widgets\GithubFrame;
use humhub\models\Setting;

class Events extends \yii\base\BaseObject
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('GithubModule.base', 'GitHub Settings'),
            'url' => Url::toRoute('/github/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-github"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'github' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addGithubFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::class);
        $event->sender->addWidget(GithubFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'github')
        ]);
    }
}
