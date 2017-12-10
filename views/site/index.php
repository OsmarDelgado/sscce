<?php

use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = 'SSCCE';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Bienvenido al Sistema de Solicitud de Constancias</h1>
        <br><br>
    		<div class= "col-lg-12" >
           <?= Html::a(Yii::t('app', 'Entrar'), ['/site/login'], ['class' => 'btn btn-success']) ?>
           <?= Html::a(Yii::t('app', 'Registrarte'), ['/site/register'], ['class' => 'btn btn-primary']) ?>
    		</div>
    </div>
</div>
