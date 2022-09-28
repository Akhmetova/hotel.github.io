<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29.08.2018
 * Time: 12:09
 */

namespace app\models;
use yii\db\ActiveRecord;


class ProductGallery extends ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }
    public function getProductGallery(){
        return $this->hasOne(Product::className(),['id' => 'products_id']);
    }
}