<h1>Signup</h1>

<?php

/* @var $form yii\bootstrap\ActiveForm */

$this->title = 'Signup';

use yii\bootstrap\ActiveForm;

?>

<?php $form = ActiveForm::begin(['class' => 'form-horizantal']); ?>

<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

<?= $form->field($model, 'password')->passwordInput() ?>

<?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

<div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

<?php ActiveForm::end(); ?>

