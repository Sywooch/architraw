<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Загрузка презентации';
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFile')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Загрузить', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end() ?>