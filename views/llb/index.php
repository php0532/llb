<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LlbActivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Llb Activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="llb-activity-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Llb Activity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'intro',
            'guest',
            'gender',
            // 'age',
            // 'job',
            // 'guest_intro',
            // 'createdate',
            // 'enddate',
            // 'ownerid',
            // 'status',
            // 'views',
            // 'formid',
            // 'starttime',
            // 'address',
            // 'address_intro',
            // 'endintro',
            // 'attachment:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
