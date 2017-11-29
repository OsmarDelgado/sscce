<?php

use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = 'SSCCE';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Sistema de solicitud de contancias</h1>
        <br><br>
        <p>
            <?= Html::a(Yii::t('app', 'Solicitar'), ['/student/login'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

</div>
