<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ServiceCategory */

$this->title = 'Создание категорий услуг';
$this->params['breadcrumbs'][] = ['label' => 'Категории услуг', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
