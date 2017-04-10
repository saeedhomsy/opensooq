<?php

namespace backend\controllers;
use Yii;
use backend\models\posts;
use backend\models\postsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\SqlDataProvider;
use backend\models\User;
class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {   
        $isAdmin = User::findOne(['id' => Yii::$app->user->identity->id])->IsAdmin;
        if($isAdmin){
            $sql ="SELECT Title, Description, user.username, COUNT(Title) from Posts
                    join user on user.id = Posts.UserID
                    GROUP by Title, Description, user.username
                    having count(Title)>1 ";
            $dataProvider = new SqlDataProvider([
                'sql' => $sql,
            ]);
            return $this->render('index',['dataProvider' => $dataProvider,]);
        }else{
            throw new \yii\web\HttpException(403, 'Forbidden Hahahahah');
        } 
    }

}
