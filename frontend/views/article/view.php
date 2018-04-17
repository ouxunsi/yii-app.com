<?php
/* @var $this yii\web\View */
/* @var $model common\models\Article */
$this->title = $model->title;
?>
<div class="margintop"></div>
<div class="zxmod0">
    <div class="pagemain1">
        <div class="zxcon">
            <div class="zxdh"><a href="index.html">首页</a>&gt;资讯</div>
            <div class="zxtit"><?= $model->title ?></div>
            <div class="zxtime"><?= Yii::$app->formatter->asDatetime($model->published_at, 'php:Y-m-d') ?></div>
            <article class="zxcon1">
                <?= $model->body ?>
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
            </article>
        </div>
    </div>
</div>
