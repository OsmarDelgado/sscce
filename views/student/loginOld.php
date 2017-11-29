<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Login Student';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Por favor, ingrese su correo electrónico para iniciar sesión:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
    ]); ?>

    <?= $form->field($model, 'mail')->input('email') ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-0" style="color:#999;">
        Nota: Maestro: Escriba su nota aquí.
    </div>
</div>
