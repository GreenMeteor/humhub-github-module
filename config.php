<?php

namespace humhub\modules\github;

return [
    'id' => 'github',
    'class' => 'humhub\modules\github\Module',
    'namespace' => 'humhub\modules\github',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::className(),
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\github\Events',
                'addGithubFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::className(),
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\github\Events',
                'addGithubFrame'
            ]
        ],
        [
            'class' => \humhub\modules\user\widgets\ProfileSidebar::className(),
            'event' => \humhub\modules\user\widgets\ProfileSidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\github\Events',
                'addGithubFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\github\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];

?>
