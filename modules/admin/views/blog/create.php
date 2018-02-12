<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Blog\Blog */

$this->title = 'Создать статью';
$this->params['breadcrumbs'][] = ['label' => 'Блог', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
