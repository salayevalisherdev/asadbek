<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Faxriylar */

$this->title = Yii::t('app', 'Create Faxriylar');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Faxriylars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faxriylar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
