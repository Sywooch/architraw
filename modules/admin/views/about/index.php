<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'title',
            'text1',
            'text2',

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{update}'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
