<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\HeaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Главная';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="header-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'title',
            'text',
            'presentation',
            ['class' => 'yii\grid\ActionColumn',
             'template'=>'{update}',
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
