<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Categories;
use backend\models\Tags
/* @var $this yii\web\View */
/* @var $model backend\models\posts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(); 

    $TagsModel = new Tags();

    ?>

    <?= $form->field($model, 'Title')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

     <?= $form->field($model, 'CategoriesID')->dropDownList(
        ArrayHelper::map(Categories::find()->all(),'ID','Name'),
        ['prompt'=>'select Categories']
    ) ?>


    <?= $form->field($TagsModel, 'ID')->checkboxList(
        ArrayHelper::map(Tags::find()->all(),'ID','Name')
    ); ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
