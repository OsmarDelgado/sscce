<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StudyProgram */

$this->title = Yii::t('app', 'Crear Programa de Estudio');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Programa de Estudio'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="study-program-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
