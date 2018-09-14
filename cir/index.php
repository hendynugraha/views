<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cir Bul Hanine Project';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cir-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'drawing_no',
            'cir_no',
            'joint_no',
            'method',
            'result',
            'complete_date',
            'remarks',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
