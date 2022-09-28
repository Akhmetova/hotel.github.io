<?php

namespace app\modules\kingofsite\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property int $id
 * @property string $familiya
 * @property string $name
 * @property string $otchestvo
 * @property int $phone
 * @property string $created_at
 * @property string $updated_at
 * @property string $comment
 * @property int $visible
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
	

    public static function tableName()
    {
        return 'booking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['familiya', 'name', 'created_at'], 'required'],
           
            [['created_at', 'updated_at'], 'safe'],
            [['familiya'], 'string', 'max' => 75],
            [['name', 'otchestvo', 'comment', 'enforced'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'familiya' => 'Фамилия',
            'name' => 'Имя',
            'otchestvo' => 'Отчество',
            'phone' => 'Телефон',
            'created_at' => 'Дата заезда',
            'updated_at' => 'Дата выезда',
            'comment' => 'Комментарий',
            'name_nomer' => 'Гостиничный номер',
			'price' => 'Цена',
			'enforced' => 'Засилен',
        ];
    }
}
