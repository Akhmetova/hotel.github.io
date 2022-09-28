<?php 

namespace app\controllers;

use Yii;
use yii\helpers\Url;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Categories;
use app\models\Products;
use app\models\Gallery;
use app\models\Product;
use app\models\Maps;
use app\models\Booking;
use app\models\BookingForm;
use app\models\ProductGallery;

/**
 * My controller
 */
class MyController extends Controller{
	
	public function actionIndex()
    {	
		$gallery = Gallery::find()->one();
		return $this->render('index');
    }
	
	public function actionListproducts()
    {	
	
		if(isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT))
		{
			$categories = Categories::find()->where(['id' => $_GET['id']])->asArray()->one();
			
			if(count($categories) > 0)
			{
				$products_array = Products::find()->where(['category' => $_GET['id']])->all();
				return $this->render('listproducts', compact ('categories', 'products_array'));
			}
		}
			return $this-redirect(['my/catalog']);
    }
	
	public function actionCatalog()
    {	
		$categories = Categories::find()->asArray()->all();
        return $this->render('catalog', compact ('categories'));
    }
	
	public function actionProduct()
    {	
        {   $galerry = ProductGallery::find()->where(['products_id'=> $id])->all();
       //debug($galerry);
       $id = Yii::$app->request->get('id');
       $product = Products::findOne($id);
       if (empty($product))
       {
           throw new \yii\web\HttpException(404, 'Такого товара нет');
       }
       return $this->render('product', compact('galerry', 'product' ));
   }
	}
	
	public function actionSauna()
    {	
		$sauna = Products::find()->where(['visible' => '2'])->one();
		return $this->render('sauna', compact ('sauna'));
    }
	
	public function actionServices() 
	{
		$services = Products::find()->where(['visible' => '1'])->one();
		return $this->render('services', compact ('services'));
	}
	
		public function actionMaps()
    {
		return $this->render('maps', compact ('maps'));
    }
	public function actionBooking()
    {

		return $this->redirect(Url::to(['products/index'] ));
		
		
    }
}
