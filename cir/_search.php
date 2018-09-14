<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CirSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cir-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'drawing_no') ?>

    <?= $form->field($model, 'cir_no') ?>

    <?= $form->field($model, 'joint_no') ?>

    <?= $form->field($model, 'method') ?>

    <?php // echo $form->field($model, 'result') ?>

    <?php // echo $form->field($model, 'complete_date') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
