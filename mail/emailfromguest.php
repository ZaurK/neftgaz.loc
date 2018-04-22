<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $user common\models\User */
?>
<div class="mailformat">
    <p>Письмо с сайта ogconsult.com</p>
	<p>Отправитель: <?= $namefrom ?></p>
    <p>email: <?= $emailfrom ?></p>
    <p>Телефон: <?= $phonefrom ?></p>

    <p><?= $bodyfrom ?></p>

   
</div>