<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\posts;

/**
 * postsSearch represents the model behind the search form about `backend\models\posts`.
 */
class postsSearch extends posts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'CategoriesID', 'UserID'], 'integer'],
            [['Title', 'Description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params,$isGetAll=false)
    {
        if($isGetAll){
            $query = posts::find();
        }else{
        $query = posts::find()->where(['UserID' => Yii::$app->user->identity->id]);
        }

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'CategoriesID' => $this->CategoriesID,
            'UserID' => $this->UserID,
        ]);

        $query->andFilterWhere(['like', 'Title', $this->Title])
            ->andFilterWhere(['like', 'Description', $this->Description]);

        return $dataProvider;
    }
}
