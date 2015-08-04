<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LlbActivity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="llb-activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'intro')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'guest')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'job')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'guest_intro')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'createdate')->textInput() ?>

    <?= $form->field($model, 'enddate')->textInput() ?>

    <?= $form->field($model, 'ownerid')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'views')->textInput() ?>

    <?= $form->field($model, 'formid')->textInput() ?>

    <?= $form->field($model, 'starttime')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'address_intro')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'endintro')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'attachment')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
