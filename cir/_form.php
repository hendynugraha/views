<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cir */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cir-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'drawing_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cir_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'joint_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'method')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'result')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complete_date')->textInput() ?>

    <?= $form->field($model, 'remarks')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
