<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudyProgram */

$this->title = Yii::t('app', 'Actualizar {modelClass}: ', [
    'modelClass' => 'Programa de Estudio',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Programa de Estudio'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="study-program-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
