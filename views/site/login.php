<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login Management';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p><?= Yii::t('app', 'Please fill out the following fields to login:') ?></p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
    ]); ?>

    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div class="form-group text-center">
            <?= Html::submitButton(Yii::t('app', 'Enter'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
      </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
