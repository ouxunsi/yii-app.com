<?php

namespace frontend\controllers;

use common\models\Article;
use common\models\ArticleAttachment;
use common\models\ArticleCategory;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class JoinUsController extends Controller
{
    /**
     * 方法描述：
     * @return array|string
     * 注意：
     */
    public function actionIndex()
    {
        $category_id = Yii::$app->request->get('category_id');
        $categories = ArticleCategory::find()->where(['parent_id' => 2, 'status' => 1])->all();
        $this->layout = '_clear';
        return $this->render('index', ['categories' => $categories, 'category_id' => $category_id, 'slug' => 'join-us']);
    }

    /**
     * @param $slug
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($slug)
    {
        $model = Article::find()->published()->andWhere(['slug' => $slug])->one();
        if (!$model) {
            throw new NotFoundHttpException;
        }

        $viewFile = $model->view ?: 'view';
        return $this->render($viewFile, ['model' => $model]);
    }

    /**
     * @param $id
     * @return \yii\console\Response|\yii\web\Response
     * @throws NotFoundHttpException
     * @throws \League\Flysystem\FileNotFoundException
     * @throws \yii\base\InvalidConfigException
     * @throws \yii\web\RangeNotSatisfiableHttpException
     */
    public function actionAttachmentDownload($id)
    {
        $model = ArticleAttachment::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException;
        }

        return Yii::$app->response->sendStreamAsFile(
            Yii::$app->fileStorage->getFilesystem()->readStream($model->path),
            $model->name
        );
    }
}
