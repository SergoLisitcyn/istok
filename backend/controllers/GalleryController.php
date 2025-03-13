<?php

namespace backend\controllers;

use common\models\Gallery;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * GalleryController implements the CRUD actions for Gallery model.
 */
class GalleryController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }


    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Gallery::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        if (Yii::$app->request->post('hasEditable'))
        {
            $id=$_POST['editableKey'];
            $model = $this->findModel($id);
            $post = [];
            $posted = current($_POST['Gallery']);

            $post['Gallery'] = $posted;
            if ($model->load($post)) {
                $model->save();
            }

            return $this->refresh();
        }

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Gallery model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Gallery model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Gallery();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $image = null;
                if($_FILES){
                    $uploadedFiles = $this->reformatFilesArray($_FILES['image']);
                    $image = $model->attachImage($uploadedFiles,$uploadedFiles);
                }

                if($image){
                    $model->image = Json::encode($image);
                }

                if($model->save()){
                    Yii::$app->session->addFlash('success', 'Создан');
                    return $this->redirect(['update', 'id' => $model->id]);
                } else {
                    var_dump($model->errors); die;
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Gallery model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $imagesArray = $model['image'];
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                $image = null;
                if($_FILES){
                    $uploadedFiles = $this->reformatFilesArray($_FILES['image']);
                    $image = $model->attachImage($uploadedFiles,$uploadedFiles);
                }

                if($image){
                    $imagesArray = array_merge($imagesArray, $image);
                }
                $model->image = Json::encode($imagesArray);


                if($model->save()){
                    Yii::$app->session->addFlash('success', 'Обновлено');
                    return $this->redirect(['update', 'id' => $model->id]);
                } else {
                    var_dump($model->errors); die;
                }
            }
        }

        $imagesArray = $model->image ?? [];
        return $this->render('update', [
            'model' => $model,
            'imagesArray' => $imagesArray,
        ]);
    }

    /**
     * Deletes an existing Gallery model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionDeleteimage()
    {
        $id = $_POST['id'];
        $index = $_POST['index'];

        $model = $this->findModel($id);
        $imagesArray = $model->image ?? [];

        if (isset($imagesArray[$index])) {
            unset($imagesArray[$index]); // Убираем из массива

            $model->image = Json::encode(array_values($imagesArray)); // Обновляем JSON
            $model->save();

            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "error" => "Файл не найден"]);
        }
    }

    /**
     * Finds the Gallery model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Gallery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Gallery::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function reformatFilesArray($files) {
        $fileArray = [];
        foreach ($files['name'] as $key => $name) {
            if ($files['error'][$key] === UPLOAD_ERR_OK) {
                $fileArray[] = [
                    'name' => $name,
                    'type' => $files['type'][$key],
                    'tmp_name' => $files['tmp_name'][$key],
                    'error' => $files['error'][$key],
                    'size' => $files['size'][$key],
                ];
            }
        }
        return $fileArray;
    }

}
