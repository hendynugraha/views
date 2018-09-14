<?php
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'file_excel')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>