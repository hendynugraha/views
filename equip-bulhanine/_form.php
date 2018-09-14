<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EquipBulhanine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equip-bulhanine-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cert')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'issue_date')->textInput() ?>

    <?= $form->field($model, 'expired_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
