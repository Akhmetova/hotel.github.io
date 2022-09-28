<?php

namespace app\modules\kingofsite\models;

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
 * @property int $from_date
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
	
	
	public function getCategory(){
		return $this->hasOne(Category::className(), ['id' => 'category']);
	}
	
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'price'], 'required'],
            [['price', 'visible', 'products_id'], 'integer'],
            [['description'], 'string'],
            [['category', 'name', 'img'], 'string', 'max' => 255],
            [['id'], 'unique'],
		   [['img'], 'file', 'extensions' => 'png, jpg'],
		   [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4], 
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID товара',
            'category' => 'Категория',
            'name' => 'Наименование',
            'image' => 'Главная картинка',
			'gallery' => 'Галерея',
            'description' => 'Описание',
            'price' => 'Цена',
            'visible' => 'Visible',
            'products_id' => 'Products ID',
            'from_date' => 'From Date',
        ];
    }
	public function upload(){
		if($this->validate()){
			$path = 'upload/store/' . $this->image->baseName . '.' . $this->image->extension;
			$this->image->saveAs($path);
			$this->attachImage($path, true);
			@unlink($path);
			return true;
		}else{
			return false;
		}
	} 
		public function uploadGallery(){
		if($this->validate()){
			foreach($this->gallery as $file){
				$path = 'upload/store/' . $file->baseName . '.' . $file->extension;
			$file->saveAs($path);
			$this->attachImage($path);
			@unlink($path);
			}
			return true;
		}else{
			return false;
		}
	}
}
