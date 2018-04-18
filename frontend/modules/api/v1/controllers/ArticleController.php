<?php

namespace frontend\modules\api\v1\controllers;

use frontend\modules\api\v1\resources\Article;
use frontend\modules\api\v1\resources\ArticleCategory;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\web\HttpException;
use yii\web\Response;

/**
 * Class ArticleController
 * @author Eugene Terentev <eugene@terentev.net>
 */
class ArticleController extends ActiveController
{
    /**
     * @var string
     */
    public $modelClass = 'frontend\modules\api\v1\resources\Article';
    /**
     * @var array
     */
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items'
    ];

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'index' => [
                'class' => 'yii\rest\IndexAction',
                'modelClass' => $this->modelClass,
                'prepareDataProvider' => [$this, 'prepareDataProvider']
            ],
            'view' => [
                'class' => 'yii\rest\ViewAction',
                'modelClass' => $this->modelClass,
                'findModel' => [$this, 'findModel']
            ],
            'options' => [
                'class' => 'yii\rest\OptionsAction'
            ]
        ];
    }

    /**
     * @return ActiveDataProvider
     */
    public function prepareDataProvider()
    {
        return new ActiveDataProvider(array(
            'query' => Article::find()->published()
        ));
    }

    /**
     * @param $id
     * @return array|null|\yii\db\ActiveRecord
     * @throws HttpException
     */
    public function findModel($id)
    {
        $model = Article::find()
            ->published()
            ->andWhere(['id' => (int)$id])
            ->one();
        if (!$model) {
            throw new HttpException(404);
        }
        return $model;
    }

    public function actionGetNews(){

        \Yii::$app->response->format = Response::FORMAT_JSON;
        try {
            $params = \Yii::$app->request->post();
            $limit = $params['limit'] ?? 3;
            $offset = $params['offset'] ?? 0;
            $this->layout = '_clean';
            $models = Article::find()->published()->limit($limit)->offset($offset)
                ->andFilterWhere(['category_id'=>$params['category_id']])->orderBy(['published_at'=>SORT_DESC])->all();
            if($models) {
                $data = [
                    'code' => 1,
                    'data' => $this->render('news-list', ['models' => $models])
                ];
            }else{
                $data = [
                    'code' => 404,
                    'data' => ''
                ];
            }
        }catch(\Exception $exception){
            $data = [
                'code' => $exception->getCode(),
                'msg' => $exception->getMessage(),
            ];
        }
        return $data;
    }

    public function actionGetJobs(){
        \Yii::$app->response->format = Response::FORMAT_JSON;
        try {
            $params = \Yii::$app->request->post();
            $limit = $params['limit'] ?? 3;
            $offset = $params['offset'] ?? 0;
            $this->layout = '_clean';
            $model = ArticleCategory::findOne(['slug'=>'jobs']);
            if(empty($params['category_id'])){
                $categories = ArticleCategory::find()->where(['parent_id'=>$model->id])->indexBy('id')->asArray()->all();
                if(empty($categories)){
                    $models = [];
                }else{
                    $models = Article::find()->published()->limit($limit)->offset($offset)
                        ->andFilterWhere(['category_id' => array_keys($categories)])->orderBy(['published_at' => SORT_DESC])->all();
                }
            }else {
                $models = Article::find()->published()->limit($limit)->offset($offset)
                    ->andFilterWhere(['category_id' => $params['category_id']])->orderBy(['published_at' => SORT_DESC])->all();
            }
            if($models) {
                $data = [
                    'code' => 1,
                    'data' => $this->render('jobs-list', ['models' => $models])
                ];
            }else{
                $data = [
                    'code' => 404,
                    'data' => ''
                ];
            }
        }catch(\Exception $exception){
            $data = [
                'code' => $exception->getCode(),
                'msg' => $exception->getMessage(),
            ];
        }
        return $data;
    }

    public function actionGetActives(){
        \Yii::$app->response->format = Response::FORMAT_JSON;
        try {
            $params = \Yii::$app->request->post();
            $limit = $params['limit'] ?? 3;
            $offset = $params['offset'] ?? 0;
            $this->layout = '_clean';
            $model = ArticleCategory::findOne(['slug'=>'actives']);
            $models = Article::find()->published()->limit($limit)->offset($offset)
                ->andFilterWhere(['category_id' => $model->id])->orderBy(['created_at' => SORT_DESC])->all();
            if($models) {
                $data = [
                    'code' => 1,
                    'data' => $this->render('actives-list', ['models' => $models])
                ];
            }else{
                $data = [
                    'code' => 404,
                    'data' => ''
                ];
            }
        }catch(\Exception $exception){
            $data = [
                'code' => $exception->getCode(),
                'msg' => $exception->getMessage(),
            ];
        }
        return $data;
    }
}
