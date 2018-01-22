<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceCategory */

$this->title = 'Обновить категорию услуг: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Категории услуг', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="service-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
