<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PersonnelBulhanine */

$this->title = 'Create Personnel Bulhanine';
$this->params['breadcrumbs'][] = ['label' => 'Personnel Bulhanines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personnel-bulhanine-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
