<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Categories;


$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Html::a('Create Posts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                [
                    'class' => 'yii\grid\SerialColumn'
                ],

                'ID',
                'Title:ntext',
                'Description:ntext',
                [
                    'class' => 'yii\grid\ActionColumn'
                ],
            ],
        ]); ?>
</div>
