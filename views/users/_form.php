<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Countries;


/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */

//$this->registerJsFile("js/jquery-3.1.0.min.js");



?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_id')->dropDownList(
        ArrayHelper::map(Countries::find()->all(), 'id', 'name'),
        ['prompt' => 'выберите страну']
    ) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php
    $this->registerJsFile('web\js\jquery.formatter.js', ['depends' => 'yii\web\JqueryAsset']);
    $this->registerJsFile('web\js\phone-number.js', ['depends' => 'web\js\jquery.formatter.js']);
    ?>
</div>
