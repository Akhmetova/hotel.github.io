<?php

namespace app\modules\kingofsite\controllers;
use Yii;
use app\modules\kingofsite\models\Products;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Products::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
	     {
        $model = new Products();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			
			$model->image = UploadedFile::getInstance($model, 'image');
			if($model->image){
				$model->upload();
			}
			unset($model->image);
			$model->gallery = UploadedFile::getInstances($model, 'gallery');
			$model->uploadGallery();
			
			Yii::$app->session->setFlash('success', "Номер {$model->name} обновлен");
			
            return $this->redirect(['view', 'id' => $model->id]);
        }else{

        return $this->render('create', [
            'model' => $model,
        ]);
		}
    }


    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			
			$model->image = UploadedFile::getInstance($model, 'image');
			if($model->image){
				$model->upload();
			}
			unset($model->image);
			$model->gallery = UploadedFile::getInstances($model, 'gallery');
			$model->uploadGallery();
			
			Yii::$app->session->setFlash('success', "Номер {$model->name} обновлен");
			
            return $this->redirect(['view', 'id' => $model->id]);
        }else{

        return $this->render('update', [
            'model' => $model,
        ]);
		}
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
