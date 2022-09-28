<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $text
 */
class Gallery extends \yii\db\ActiveRecord
{	
	
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
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4], 
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
        ];
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
