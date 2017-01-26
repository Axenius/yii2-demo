<h1>Login</h1>

<?php

use yii\bootstrap\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'username')->textInput(['auofocus' => true]) ?>

<?= $form->field($model, 'password')->passwordInput() ?>

<div>
    <button class="btn- btn-success" type="submit">Login</button>
</div>

<?php ActiveForm::end() ?>
