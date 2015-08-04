<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \app\models\LlbForm */
/* @var $form ActiveForm */
?>
<div class="llbFrom">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'lid') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'Contact') ?>
        <?= $form->field($model, 'gender') ?>
        <?= $form->field($model, 'age') ?>
        <?= $form->field($model, 'job') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'datetime') ?>
        <?= $form->field($model, 'thinking') ?>
        <?= $form->field($model, 'ip') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- llbFrom -->
