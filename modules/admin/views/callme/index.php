<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CallMeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Call Me';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-me-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'phone',
            'email:email',

            ['class' => 'yii\grid\ActionColumn',],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
