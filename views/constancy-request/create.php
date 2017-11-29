<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ConstancyRequest */

$this->title = Yii::t('app', 'Create Constancy Request');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Constancy Requests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="constancy-request-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
