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
                            <?php echo Html::img($model->thumbnail_base_url.'/'.$model->thumbnail_path,
                                ['class' => 'article-thumb img-rounded pull-left']
                            ) ?>
                        <?php endif; ?></a></div>
                <div class="zxmod3con">
                    <div class="zxmod3tit1"><?php echo Yii::$app->formatter->asDatetime($model->published_at,'php:Y/m/d') ?></div>
                    <div class="zxmod3tit2">
                        <?php echo Html::a($model->title, \yii\helpers\Url::toRoute(['/article/view', 'slug'=>$model->slug])) ?>
                    </div>
                </div>
            </div>

        </div>
    </li>
<?php endforeach;?>