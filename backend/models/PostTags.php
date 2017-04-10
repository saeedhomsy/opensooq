<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "PostTags".
 *
 * @property integer $PostsID
 * @property integer $TagsID
 */
class PostTags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PostTags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PostsID', 'TagsID'], 'required'],
            [['PostsID', 'TagsID'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PostsID' => 'Posts ID',
            'TagsID' => 'Tags ID',
        ];
    }
}
