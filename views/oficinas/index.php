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


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <div class="panel panel-primary">
        <div class="panel-heading"><?= Html::encode($this->title) ?></div>
        <div class="panel-body">
            <p>
                <?= Html::a('Create ' . $this->title, ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?=
            GridView::widget([
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
            ]);
            ?>
        </div>
    </div>
</div>