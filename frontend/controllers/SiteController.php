<?php

namespace frontend\controllers;

use common\models\Contact;
use frontend\models\ContactForm;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction'
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null
            ],
            'set-locale' => [
                'class' => 'common\actions\SetLocaleAction',
                'locales' => array_keys(Yii::$app->params['availableLocales'])
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionContact()
    {
        $model = new Contact();
        try{
            if ($model->load(Yii::$app->request->post())) {
                if($model->save(false)) {
                    return $this->refresh();
                }
            }
        }catch (\Exception $exception){
            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model
        ]);
    }
}
