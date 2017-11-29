<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ConstancyType */

$this->title = Yii::t('app', 'Crear Tipo de Constancia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipo de Constancia'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="constancy-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
