<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "booking".
 *
 * @property int $id


 * @property string $famil
 * @property string $otchestvo
 * @property int $phone
 * @property string $created_at
 * @property string $updated_at
 */
class Booking extends ActiveRecord
{

	/**
     * {@inheritdoc}
     */
	
    /**
     * {@inheritdoc}
     */
	 
    public function rules()
    {
        return [
            [['familiya', 'name', 'otchestvo', 'phone'], 'required'],
			
			 [['created_at', 'updated_at'], 'safe'],
            [['familiya', 'comment'], 'string', 'max' => 50],
			[['phone'], 'string'],
           
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
            'phone' => 'Ваш телефон',
			'created_at' => 'Дата заезда',
        ];
    }
	   public function create($email)
    {
       if ($this->validate()) {
           Yii::$app->mailer->compose('order', ['model' => $model])
                ->setTo($email)
                ->setFrom(['elyabest-94@mail.ru' => 'Письмо с сайта'])
                ->setSubject('Бронирование')
                ->send();

            return true;
        }
        return false;
    }
}
