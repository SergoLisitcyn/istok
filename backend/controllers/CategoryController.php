<?php

namespace backend\controllers;

use common\models\Category;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
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
        if(Yii::$app->request->get('id')){
            $dataProvider = new ActiveDataProvider([
                'query' => Category::find()->where(['parent_id' => Yii::$app->request->get('id')]),
                'sort' => [
                    'defaultOrder' => [
                        'status' => SORT_DESC,
                        'sort' => SORT_ASC,
                    ]
                ],

            ]);
        } else {
            $dataProvider = new ActiveDataProvider([
                'query' => Category::find(),
//            'pagination' => [
//                'pageSize' => 50
//            ],
                'sort' => [
                    'defaultOrder' => [
                        'status' => SORT_DESC,
                        'sort' => SORT_ASC,
                    ]
                ],

            ]);
        }


        if (Yii::$app->request->post('hasEditable'))
        {
            $id=$_POST['editableKey'];
            $model = $this->findModel($id);
            $post = [];
            $posted = current($_POST['Category']);
            $post['Category'] = $posted;
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
     * Displays a single Category model.
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
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Category();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->list = Json::encode($model->list);

                if($model->save()){
                    Yii::$app->session->addFlash('success', 'Обновлено');
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
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->list = Json::encode($model->list);

                if($model->save()){
                    Yii::$app->session->addFlash('success', 'Обновлено');
                    return $this->redirect(['update', 'id' => $model->id]);
                } else {
                    var_dump($model->errors); die;
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Category model.
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

    /**
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
