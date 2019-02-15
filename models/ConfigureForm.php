<?php

namespace humhub\modules\github\models;

use Yii;

class ConfigureForm extends \yii\base\Model
{

    public $sort;

    public function rules()
    {
        return [

            [['sort'],'safe'],
            [['sort'],'required'],
            [['sort'],'integer','min' => 0,'max' => '2000']

        ];
    }

    public function attributeLabels()
    {
        return [
            'sort' => Yii::t('GithubModule.base', 'Sort')
        ];
    }

    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('GithubModule.base', 'eg: 999'),
        ];
    }

    public function loadSettings()
    {
        $this->sort = Yii::$app->getModule('github')->settings->get('sort');
        return true;
    }

    public function save()
    {
        Yii::$app->getModule('github')->settings->set('sort', $this->sort);
        return true;
    }
}
