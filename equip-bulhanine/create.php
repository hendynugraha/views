<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EquipBulhanine */

$this->title = 'Create Equip Bulhanine';
$this->params['breadcrumbs'][] = ['label' => 'Equip Bulhanines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equip-bulhanine-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
