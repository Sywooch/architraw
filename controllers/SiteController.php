<?php

namespace app\controllers;

use app\models\About\About;
use app\models\CallMe\CallMe;
use app\models\Header\Header;
use app\models\Portfolio\Project;
use app\models\Portfolio\Projects;
use app\models\Service\Service;
use app\models\Service\ServiceCategory;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $header = Header::find()->one();
        $service =Service::find()->one();
        $service_categories = ServiceCategory::find()->all();
        $project = Project::find()->one();
        $projects = Projects::find()->limit(4)->all();
        $about = About::find()->one();
        $model = new CallMe();
        $quickorder = new CallMe();
        mail('alexskoromnui96@yandex.com', 'Fast call', 'Please call me');
        if ($quickorder->load(Yii::$app->request->post()) && $quickorder->save()) {
            mail('alexskoromnui96@yandex.com', 'Fast call', 'Please call me');
//            Yii::$app->mailer->compose('phone', ['quickorder' => $quickorder])
//                ->setFrom('alexskoromnui96@yandex.com')
//                ->setTo('alexskoromnui@gmail.com')
//                ->setSubject('Быстрый заказ')
//                ->send();

            //return $this->refresh();
        }


        return $this->render('index',[
            'header' => $header,
            'service' => $service,
            'service_categories' => $service_categories,
            'project' => $project,
            'projects' => $projects,
            'about' => $about,
            'model' => $model
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
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
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionDownload()
    {
        $model = Header::find()->one();
        $file = Yii::getAlias('@web'). 'uploads/'.$model->presentation;
        return Yii::$app->response->sendFile($file);
    }
}
