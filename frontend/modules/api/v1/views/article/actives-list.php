<?php
/* @var $this yii\web\View */
/* @var $model \common\models\Article*/
use yii\helpers\Html;
?>
<?php foreach ($models as $model):?>
    <li>
        <div class="huodongmod2">
            <div class="huodongmod3">
                <a href="<?= \yii\helpers\Url::toRoute(['/active/view', 'slug'=>$model->slug])?>"><?php if ($model->thumbnail_path): ?>
                        <?php echo Html::img($model->thumbnail_base_url.'/'.$model->thumbnail_path,
                            ['class' => 'article-thumb img-rounded pull-left']
                        ) ?>
                    <?php endif; ?></a>
                <div class="huodongmod3tit1"><a href="<?= \yii\helpers\Url::toRoute(['/active/view', 'slug'=>$model->slug])?>"><?= \yii\helpers\StringHelper::truncate($model->title, 52, '……', null, true)?></a></div>
            </div>
        </div>
    </li>
<?php endforeach;?>