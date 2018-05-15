<?php
/* @var $this yii\web\View */
/* @var $model common\models\Article */
$this->title = $model->title;
?>
<div class="zxmod0">
    <div class="pagemain1">
        <div class="zxcon">
            <div class="zxdh"><a href="/">首页</a>&gt;活动</div>
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
<script>
    <?php $this->beginBlock('ACTIVE_NAV')?>
    $("#hw1_global_nav .topnav li").removeClass('topnavlicur');
    $("#active").closest('li').addClass('topnavlicur');
    <?php $this->endBlock()?>
</script>
<?php $this->registerJs($this->blocks['ACTIVE_NAV'], \yii\web\View::POS_READY) ?>
