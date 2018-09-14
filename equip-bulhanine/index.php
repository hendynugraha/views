<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EquipBulhanineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equip Bulhanines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equip-bulhanine-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Equip Bulhanine', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'position',
            'qual',
            'cert',
            //'issue_date',
            //'expired_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
