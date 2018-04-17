<?php

namespace frontend\controllers;

use common\models\Article;
use common\models\ArticleAttachment;
use frontend\modules\api\v1\resources\ArticleCategory;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
class ActiveController extends Controller
{
    /**
     * 方法描述：
     * @return array|string
     * 注意：
     */
    public function actionIndex()
    {
        $model = ArticleCategory::findOne(['slug'=>'actives']);
        $active = Article::find()->where(['category_id'=>$model->id])->published()->one();
        if($model->status == ArticleCategory::STATUS_DRAFT || empty($active)){
            return $this->redirect(Url::toRoute(['page/view','slug'=>'not-active']));
        }
        return $this->render('index');
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
