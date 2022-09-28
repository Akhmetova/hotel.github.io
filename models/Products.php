<?php

namespace app\models;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $category
 * @property string $name
 * @property string $img
 * @property string $description
 * @property int $price
 * @property int $visible
 * @property int $products_id
 * @property string $updated_at
 */
class Products extends \yii\db\ActiveRecord
{	
	public $image;
	public $gallery;
	public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return 'products';
    }
	
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['updated_at'], 'required'],
            [['id', 'price', 'visible', 'products_id'], 'integer'],
            [['description'], 'string'],
            [['updated_at'], 'safe'],
            [['category', 'name', 'img'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            /*'id' => 'ID',
            'category' => 'Category',
            'visible' => 'Visible',
            'products_id' => 'Products ID',
			*/
			'name' => '',
			'img' => '',
			'description' => '',
            'price' => '',
            'updated_at' => 'Бронирование',
        ];
    }
}
