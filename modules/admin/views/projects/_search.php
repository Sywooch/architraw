<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProjectsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'flat') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
