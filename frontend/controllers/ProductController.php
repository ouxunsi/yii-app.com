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

class ProductController extends Controller
{
    /**
     * 方法描述：产品资讯
     * @return string
     * 注意：
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
