<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Info */

$this->title = 'Изменение информации о компании';
$this->params['breadcrumbs'][] = ['label' => 'Изменение информации о компании', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
