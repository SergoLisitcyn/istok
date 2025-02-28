<?php

namespace frontend\controllers;

use common\models\Applications;
use common\models\Banners;
use common\models\Feedback;
use common\models\Gallery;
use common\models\Pages;
use common\models\Services;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\captcha\CaptchaAction;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\ErrorAction;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
            'captcha' => [
                'class' => CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $application = new Applications();
        $services = Services::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
        if ($application->load(Yii::$app->request->post()) && $application->save()) {
            Yii::$app->session->setFlash('successReviews', 'Сообщение отправлено! Спасибо!');
            return $this->refresh();
        } else {
            return $this->render('index', [
                'banner' => Banners::findOne(1),
                'services' => $services,
            ]);
        }
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $data = Pages::findOne(['url' => 'contacts']);
        return $this->render('contact', [
            'data' => $data,
        ]);
    }

    public function actionPrivacy()
    {
        $data = Pages::findOne(['url' => 'privacy']);
        return $this->render('privacy', [
            'data' => $data,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionWorks()
    {
        $data = Pages::findOne(['url' => 'works']);
        $services = Services::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
        $arrayService = [];
        foreach ($services as $key => $service){
            $gallery = Gallery::find()->where(['status' => 1,'parent_id' => $service->id])->orderBy(['sort' => SORT_ASC])->all();
            if($gallery){
                $arrayService[$key] = [
                    'service' => $service,
                    'gallery' => $gallery,
                ];
            }
        }

        return $this->render('works', [
            'data' => $data,
            'arrayService' => $arrayService,
        ]);
    }

    public function actionCompany()
    {
        $application = new Applications();
        $data = Pages::findOne(['url' => 'company']);
        if ($application->load(Yii::$app->request->post()) && $application->save()) {
            Yii::$app->session->setFlash('successReviews', 'Сообщение отправлено! Спасибо!');
            return $this->refresh();
        } else {
            return $this->render('company', [
                'data' => $data,
            ]);
        }

    }

    public function actionVacancy()
    {
        $data = Pages::findOne(['url' => 'vacancy']);
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
                Yii::$app->session->setFlash(
                    'successReviews',
                    'Сообщение отправлено! Спасибо!'
                );
            }

            return $this->refresh();
        }

        return $this->render('vacancy', [
            'data' => $data,
        ]);
    }

    public function actionBuilding()
    {
        return $this->render('building');
    }
    public function actionElectrical()
    {
        return $this->render('electrical');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
