<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ConstancyType */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tipo de Contancia',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipo de Contancia'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="constancy-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
