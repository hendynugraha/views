<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cir */

$this->title = 'Update Cir: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
