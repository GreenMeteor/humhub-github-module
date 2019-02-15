<?php

use \humhub\compat\CActiveForm;
use yii\helpers\Html;
use \humhub\models\Setting;
use \humhub\modules\github\controllers\AdminController;
?>

<div class="panel panel-default">
	<div class="panel-heading"><?= Yii::t('GithubModule.base', '<strong>GitHub</strong>'); ?></div>
	<div class="panel-body">
		<?php $form = CActiveForm::begin(['id' => 'github-settings-form']); ?>
			<?= $form->errorSummary($model); ?>
			<div class="form-group">
				<?= $form->labelEx($model, 'sort'); ?>
				<?= $form->textField($model, 'sort', ['class' => 'form-control', 'readonly' => Setting::IsFixed('sort', 'github')]); ?>
			</div>
			<p class="help-block"><?= Yii::t('base', 'Widget positioning.'); ?></p>
			<?= Html::submitButton(Yii::t('base', 'save'), ['class' => 'btn btn-primary']); ?>
		<?php CActiveForm::end(); ?>
	</div>
</div>
