<?php

namespace backend\modules\article\controllers;

use backend\modules\article\models\search\ArticleSearch;
use common\models\Article;
use common\models\ArticleCategory;
use common\traits\FormAjaxValidationTrait;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class DefaultController extends Controller
{
    use FormAjaxValidationTrait;

    /** @inheritdoc */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort = [
            'defaultOrder' => ['published_at' => SORT_DESC],
        ];

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @return mixed
     */
    public function actionCreate()
    {
        $article = new Article();

        $this->performAjaxValidation($article);

        if ($article->load(Yii::$app->request->post()) && $article->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $article,
                'categories' => ArticleCategory::find()->active()->all(),
            ]);
        }
    }

    /**
     * @param integer $id
     *
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $article = $this->findArticle($id);

        $this->performAjaxValidation($article);

        if ($article->load(Yii::$app->request->post()) && $article->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $article,
                'categories' => ArticleCategory::find()->active()->all(),
            ]);
        }
    }

    /**
     * @param integer $id
     *
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findArticle($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * @param integer $id
     *
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findArticle($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
