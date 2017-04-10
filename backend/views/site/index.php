<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\posts;
use backend\models\Categories;
use yii\grid\GridView;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Small Test!</h1>

        <p class="lead">All posts.</p>
    </div>

    <div class="body-content">

        <div class="row">
             <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'ID',
        'ID',
        'UserID',
        'Title:ntext',
        'Description:ntext',
        [
            'class' => 'yii\grid\ActionColumn',
            //'visible' => '(Yii::$app->user->identity->id==ID?true:false)',
            'visible' => (0),
        
        ],
        ],
        ]); ?>
        </div>

    </div>
</div>
