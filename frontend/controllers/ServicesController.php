<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Feedback;
use common\models\Pages;
use common\models\Services;
use common\models\Settings;
use HttpException;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ServicesController implements the CRUD actions for Services model.
 */
class ServicesController extends Controller
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
        $services = Services::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
        $settings = Settings::findOne(1);
        $pages = Pages::findOne(['url' => 'services']);

        $feedback = new Feedback();
        if ($feedback->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($feedback, 'file');
            $post = Yii::$app->request->post();
            if(empty($post['g-recaptcha-response'])){
                Yii::$app->session->setFlash(
                    'errors',
                    'Ошибка! Сообщение не отправлено. Подтвердите, что Вы не являетесь роботом!'
                );
                return $this->refresh();
            }
            if (!is_null($file)) {
                $feedback->file_src_filename = $file->name;
                $ext = explode(".", $file->name);
                $feedback->filename = Yii::$app->security->generateRandomString(6) . ".{$ext[1]}";
                $path = Yii::getAlias('@frontend').'/web/uploads/'.$feedback->filename;
                $file->saveAs($path);
            }

            if($post['Feedback']['version'] == 3){
                $feedback->email = 'test@test.com';
            }
            if ($feedback->save()) {
                $message = 'Сообщение отправлено! Спасибо!';
                if($settings->call_alert){
                    $message = $settings->call_alert;
                }
                Yii::$app->session->setFlash(
                    'successReviews',
                    $message
                );
            } else {
                Yii::$app->session->setFlash(
                    'errors',
                    'Ошибка! Сообщение не отправлено. Повторите попытку.'
                );
            }
            return $this->refresh();
        }

        return $this->render('index', [
            'services' => $services,
            'pages' => $pages,
        ]);
    }


    public function actionView($url)
    {
        if(!$url){
            throw new HttpException(404, 'Страница не существует.');
        }

        $feedback = new Feedback();
        if ($feedback->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($feedback, 'file');
            if (!is_null($file)) {
                $feedback->file_src_filename = $file->name;
                $ext = explode(".", $file->name);
                $feedback->filename = Yii::$app->security->generateRandomString(6) . ".{$ext[1]}";
                $path = Yii::getAlias('@frontend').'/web/uploads/'.$feedback->filename;
                $file->saveAs($path);
            }

            if ($feedback->save()) {
                $message = 'Сообщение отправлено! Спасибо!';
                Yii::$app->session->setFlash(
                    'successReviews',
                    $message
                );
            } else {
                var_dump($feedback->errors);die;
            }
            return $this->refresh();
        }

        if (strpos($url, '/') !== false) {
            $result = strstr($url, '/');
            $slug = str_replace('/', '', $result);
            $model = Category::find()->where(['url' => $slug])->one();
            $service = Services::find()->where(['id' => $model->parent_id])->one();

            return $this->render('view-category', [
                'model' => $model,
                'service' => $service,
            ]);
        }

        $model = Services::find()->where(['url' => $url])->one();
        $category = null;
        $typeClass = 'uni-slider';
        if($model){
            $category = Category::find()
                ->where([
                    'parent_id' => $model['id'],
                    'status' => 1
                ])
                ->orderBy(['sort' => SORT_ASC])
                ->all();
            if($category && $category[0] && $category[0]->type){
                $type = $category[0]->type;
                if($type == 1){
                    $typeClass = 'finishing-slider';
                }
                if($type == 3){
                    $typeClass = 'minor-repair-slider';
                }
            }

        }


        return $this->render('view', [
            'model' => $model,
            'category' => $category,
            'typeClass' => $typeClass,
        ]);
    }

    /**
     * Creates a new Services model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Services();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Services model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Services model.
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
     * Finds the Services model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Services the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Services::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
