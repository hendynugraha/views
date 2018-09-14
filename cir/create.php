<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cir */

$this->title = 'Create Cir';
$this->params['breadcrumbs'][] = ['label' => 'Cirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
