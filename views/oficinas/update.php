<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Oficinas */

$this->title = 'Update Oficinas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Oficinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oficinas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
