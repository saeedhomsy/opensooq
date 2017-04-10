<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Posts".
 *
 * @property integer $ID
 * @property string $Title
 * @property string $Description
 * @property integer $CategoriesID
 * @property integer $UserID
 */
class posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Title', 'Description', 'CategoriesID'], 'required'],
            [['Title', 'Description'], 'string'],
            [['CategoriesID'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Title' => 'Title',
            'Description' => 'Description',
            'CategoriesID' => 'Categories ID',
            //'UserID' => 'User ID',
        ];
    }
}
