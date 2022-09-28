<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking_items".
 *
 * @property int $id
 * @property int $booking_id
 * @property int $products_id
 * @property int $name
 * @property double $price
 */
class BookingItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking_items';
    }
	public function getBooking()
	{
		return $this->hasOne(Booking::className(), ['id' => 'booking_id']);
	}
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booking_id', 'products_id', 'name', 'price'], 'required'],
            [['booking_id', 'products_id', 'name'], 'integer'],
            [['price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
  
}
