<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FranstyoRoster */

$this->title = 'Create Franstyo Roster';
$this->params['breadcrumbs'][] = ['label' => 'Franstyo Rosters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="franstyo-roster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
