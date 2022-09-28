<?php

namespace app\modules\kingofsite\models;

use Yii;

/**
 * This is the model class for table "route".
 *
 * @property int $id
 * @property int $route
 */
class Route extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'route';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['route'], 'safe'],
            [['route'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            
            'route' => 'Роут слайдера "контроллер/вид"',
        ];
    }
}
