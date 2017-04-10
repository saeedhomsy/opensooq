<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\DetailView;
use backend\models\Categories;
use backend\models\PostTags;
use backend\models\posts;
use yii\widgets\ListView;
use yii\grid\GridView;


$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>          
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
            ],
            ]) ?>
        </p>


        <?php
            $allTagsst = "tag1,tag2,tag3";
        ?>

        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                'ID',
                'Description',
                [
                    'label' => 'Category Name',
                    'value' => 'CatName'

                ],
                'Tags',
                
                ],
           ]);?>
</div>
