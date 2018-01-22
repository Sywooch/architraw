<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceCategory */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Категории услуг', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверенны что хотите удалить данную услугу?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description',
            [
                'format' => 'html',
                'label' => 'Изображение категории',
                'value' => function($data){
                    return Html::img($data->getImage(), ['width'=>200]);
                }
            ],
        ],
    ]) ?>
    <h1>Изменить изображение</h1>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($image, 'imageFile')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Загрузить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end() ?>
</div>
