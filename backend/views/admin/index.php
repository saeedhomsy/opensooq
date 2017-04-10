<?php

use yii\helpers\Html;
use yii\grid\GridView;
$this->title = "Admin Page";
?>
<h2>All Duplicated Posts</h2>
<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
                [
                        'class' => 'yii\grid\SerialColumn'
                ],

                'Title',
                'Description',
                [
                        'label' => 'User name',
                        'value' => 'username'
                ]
        ],
     ]);?>
