<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FranstyoRosterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Franstyo Rosters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="franstyo-roster-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Franstyo Roster', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= \yii2fullcalendar\yii2fullcalendar::widget(array(
          'franstyorosters'=> $franstyorosters,
      ));?>
</div>
