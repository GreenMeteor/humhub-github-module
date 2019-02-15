<?php

namespace humhub\modules\github\controllers;

use Yii;
use yii\helpers\Url;
use humhub\models\Setting;
use humhub\components\behaviors\AccessControl;
use humhub\modules\github\models\ConfigureForm;

class AdminController extends \humhub\modules\admin\components\Controller
{

    public function behaviors()
    {
        return [
            'acl' => [
                'class' => AccessControl::class,
                'adminOnly' => true
            ]
        ];
    }

    public function actionIndex()
    {
        $model = new ConfigureForm();
        $model->loadSettings();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->view->saved();
        }
        else {
            $model->sort = Setting::Get('sort', 'github');
        }

        return $this->render('index', ['model' => $model]);
    }

}
