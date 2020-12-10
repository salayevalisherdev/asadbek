<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Teachers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fathername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'jinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mb_id')->textInput() ?>

    <?= $form->field($model, 'mehnat_faoliyati')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'yutuqlar')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'toifa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
