<?php
/* @var $this yii\web\View */
/* @var $model \common\models\Article*/
use yii\helpers\Html;
?>
<?php foreach ($models as $model):?>
    <li>
        <div class="zxmod2">
            <div class="zxmod3">
                <div class="zxpic"><a href="<?= \yii\helpers\Url::toRoute(['/article/view', 'slug'=>$model->slug])?>">
                        <?php if ($model->thumbnail_path): ?>
                            <?php echo Html::img(
                                Yii::$app->glide->createSignedUrl([
                                    'glide/index',
                                    'path' => $model->thumbnail_path,
                                    'w' => 100
                                ], true),
                                ['class' => 'article-thumb img-rounded pull-left']
                            ) ?>
                        <?php endif; ?></a></div>
                <div class="zxmod3con">
                    <div class="zxmod3tit1"><?php echo Yii::$app->formatter->asDatetime($model->created_at,'php:Y/m/d') ?></div>
                    <div class="zxmod3tit2" style="font-size: 15.5833px; line-height: 18.7px;">
                        <?php echo Html::a($model->title, \yii\helpers\Url::toRoute(['/article/view', 'slug'=>$model->slug])) ?>
                    </div>
                </div>
            </div>

        </div>
    </li>
<?php endforeach;?>