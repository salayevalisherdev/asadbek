<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Teachers */

$this->title = Yii::t('app', 'Update Teachers: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Teachers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id, 'user_id' => $model->user_id, 'mb_id' => $model->mb_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="teachers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
