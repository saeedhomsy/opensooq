<?php

namespace backend\controllers;

use Yii;
use backend\models\posts;
use backend\models\postsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\PostTags;
use backend\models\Tags;
use yii\db\Command;
use yii\data\SqlDataProvider;

class PostsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

   
    public function actionIndex()
    {
        $searchModel = new postsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);
    }


    public function actionView($id)
    {
        //get custom provider with all post tags by calling GetGridProvider function
        $dataProvider = $this->GetGridProvider($id);

        return $this->render('view', [
        'model' => $this->findModel($id),'dataProvider' => $dataProvider,
        ]);
    }

//return custon provider with all Posts or one post depend on $id parameter
public function GetGridProvider($id=0)
{
    $sql ="select Posts.ID as ID, Posts.UserID, Posts.Title,
           Posts.Description ,Categories.Name as CatName
           ,IF(GROUP_CONCAT(Tags.Name) is null,'No Tags',GROUP_CONCAT(Tags.Name)) as Tags
           from Posts
           left join PostTags on PostTags.PostsID = Posts.ID
           left join Tags on Tags.ID = PostTags.TagsID
           join Categories on Categories.ID = Posts.CategoriesID";

       if($id>0){
           $sql .= " where Posts.ID = :ID";
       }
       
       $sql .= " group by Posts.ID,Posts.Title,Posts.Description,Categories.Name,Posts.UserID ";
       
       return  $dataProvider = new SqlDataProvider([
                    'sql' => $sql,
                    'params' => [':ID' => $id],
                    'pagination' => [
                         'pageSize' => 1,
                    ],
                  ]);
}
    /**
     * Creates a new posts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new posts();
        if ($model->load(Yii::$app->request->post())) {
            $model->UserID = Yii::$app->user->identity->id;
            if($model->save()){
                // add Tags for this post by calling addTags function
                 $this->addTags($_POST['Tags']['ID'],$model->ID);  

                 return $this->redirect(['view', 'id' => $model->ID]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                ]);
        }
    }

    /**
     * Updates an existing posts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $posTagMod = new PostTags();
        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->ID]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                ]);
        }
    }

    /**
     * Deletes an existing posts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the posts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return posts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */

    //Add tags in PostTags table
    protected function addTags($tagsList,$id)
    {
        foreach ($tagsList as $value) {
            $newPostTags = new PostTags;
            $newPostTags->PostsID = $id;
            $newPostTags->TagsID = $value;
            $newPostTags->save();
        }

    }

    protected function findModel($id)
    {
        if (($model = posts::findOne(['id' => $id,'UserID' => Yii::$app->user->identity->id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
