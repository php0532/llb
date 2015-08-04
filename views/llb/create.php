<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LlbActivity */

$this->title = 'Create Llb Activity';
$this->params['breadcrumbs'][] = ['label' => 'Llb Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="llb-activity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
