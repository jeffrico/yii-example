<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Oficinas */

$this->title = 'Create Oficinas';
$this->params['breadcrumbs'][] = ['label' => 'Oficinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oficinas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
