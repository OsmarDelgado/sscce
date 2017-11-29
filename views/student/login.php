<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\StudyProgram;
use yii\helpers\ArrayHelper;



/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = Yii::t('app', 'Login');
?>
<div class="student-login">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="student-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton( Yii::t('app', 'Login'), ['class' => 'btn btn-success'] ) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
