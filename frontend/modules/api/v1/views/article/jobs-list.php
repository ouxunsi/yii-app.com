<?php
/* @var $this yii\web\View */
/* @var $model \common\models\Article*/
use yii\helpers\Html;
?>
<?php foreach ($models as $model):?>
    <li>
        <div class="joinmod2">
            <div class="jobtit1"><?= $model->title?></div>
            <?php echo $model->body ?>
            <?php if (!empty($model->articleAttachments)): ?>
                <h3><?php echo Yii::t('frontend', 'Attachments') ?></h3>
                <ul id="article-attachments">
                    <?php foreach ($model->articleAttachments as $attachment): ?>
                        <li>
                            <?php echo \yii\helpers\Html::a(
                                $attachment->name,
                                ['attachment-download', 'id' => $attachment->id])
                            ?>
                            (<?php echo Yii::$app->formatter->asSize($attachment->size) ?>)
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </li>
<?php endforeach;?>