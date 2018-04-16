<?php
/* @var $this yii\web\View */
/* @var $model \common\models\Article*/
use yii\helpers\Html;
?>
<?php foreach ($models as $model):?>
    <li>
        <div class="huodongmod2">
            <div class="huodongmod3">
                <a href="<?= \yii\helpers\Url::toRoute(['/article/view', 'slug'=>$model->slug])?>"><?php if ($model->thumbnail_path): ?>
                        <?php echo Html::img(
                            Yii::$app->glide->createSignedUrl([
                                'glide/index',
                                'path' => $model->thumbnail_path,
                                'w' => 100
                            ], true),
                            ['class' => 'article-thumb img-rounded pull-left']
                        ) ?>
                    <?php endif; ?></a>
                <div class="huodongmod3tit1"><a href="<?= \yii\helpers\Url::toRoute(['/article/view', 'slug'=>$model->slug])?>"><?= $model->title?></a></div>
            </div>
        </div>
    </li>
<?php endforeach;?>