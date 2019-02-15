<?php

use yii\helpers\Url;
use humhub\models\Setting;

?>
<div class="panel panel-default panel-discordapp" id="panel-github">
    <?= \humhub\widgets\PanelMenu::widget(['id' => 'panel-github']); ?>
  <div class="panel-heading">
    <?=Yii::t('GithubModule.base', '<strong>GitHub</strong>'); ?>
  </div>
  <div class="panel-body">

<div class="github-card" data-github="YOUR-USERNAME" data-width="100%" data-height="100%" data-theme="default"></div>
<script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>

</div>
</div>
