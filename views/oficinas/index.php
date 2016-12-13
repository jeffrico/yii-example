<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OficinasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oficinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oficinas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Oficinas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'direccion',
            'ciudad',
            'pais',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
