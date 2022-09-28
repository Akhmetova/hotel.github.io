<?php

namespace app\modules\kingofsite\controllers;
use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\LoginForm;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * Default controller for the `kingofsite` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
       {
		 if (!Yii::$app->user->isGuest) {
          
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
               return $this->render('main');
        }

        $model->password = '';
         return $this->render('kingofsite', [
            'model' => $model,
        ]);
		 
}
}
