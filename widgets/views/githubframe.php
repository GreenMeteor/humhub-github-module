<?php

use yii\helpers\Url;
use humhub\models\Setting;

?>
<div class="panel">
  <div class="panel-heading">
    <?=Yii::t('GithubModule.base', '<strong>GitHub</strong>'); ?>
  </div>
  <div class="panel-body">

    <div class="github-widget" data-username="Felli"></div>
    <script src="https://unpkg.com/github-card@1.2.1/dist/widget.js"></script>

</div>
</div>
