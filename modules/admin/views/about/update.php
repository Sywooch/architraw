<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\About */

$this->title = 'Описание раздела О нас';
$this->params['breadcrumbs'][] = ['label' => 'О нас', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="about-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
