<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 7/4/14
 * Time: 2:01 PM
 */

namespace frontend\controllers;

use common\models\Page;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class PageController extends Controller
{
    /**
     * 方法描述：静态页面
     * @param $slug
     * @return string
     * @throws NotFoundHttpException
     * 注意：
     */
    public function actionView($slug)
    {
        /* @var $model Page*/
        $model = Page::find()->where(['slug' => $slug, 'status' => Page::STATUS_PUBLISHED])->one();
        if (!$model) {
            throw new NotFoundHttpException(Yii::t('frontend', 'Page not found'));
        }
        $this->layout = 'base';
        if($model->view == 'about'){
            $this->layout = '_clear';
        }
        $viewFile = $model->view ?: 'view';
        return $this->render($viewFile, ['model' => $model]);
    }
}
