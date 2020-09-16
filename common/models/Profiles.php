<?php

namespace common\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "profiles".
 *
 * @property int $id
 * @property int|null $id_user
 * @property string|null $username
 * @property string|null $text
 * @property string|null $link
 * @property int|null $created_time
 */
class Profiles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profiles';
    }

    /**
     * {@inheritdoc}
     */
    public $react;
    public $grid;
    
    public function rules()
    {
        return [
            [['id_inst', 'created_time'], 'integer'],
            [['username', 'link'], 'string', 'max' => 255],
            [['text'], 'string', 'max' => 2500],
          //  [['react', 'grid'], 'required'],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_inst' => 'Id Inst',
            'username' => 'Username',
            'text' => 'Text',
            'link' => 'Link',
            'created_time' => 'Created Time',
        ];
    }
    
    public static function listProfiles()
    {
        $query = (new \yii\db\Query())
            ->select(['*'])
            ->from('profiles')
            ->orderBy([
                'created_time' => SORT_DESC
            ]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,       
            'pagination' => [
                'pageSize' => 3,
                'page'=>$_GET['page'] ? $_GET['page']-1 : 0,
            ],
        ]);
      
        return $dataProvider;
    }
    
}
