<?php
/* @var $this yii\web\View */
$this->title = '首页';
?>

<div class="pagemain">
    <div class="cbg cbg-lang-zh-cn sdw index">
        <div id="sdw-wrap" style="visibility: visible;">
            <?= \common\widgets\DbText::widget(['key' => 'index-container1'])?>
            <?= \common\widgets\DbText::widget(['key' => 'index-container2'])?>
            <?= \common\widgets\DbText::widget(['key' => 'index-container3'])?>
            <?= \common\widgets\DbText::widget(['key' => 'index-container4'])?>
            <?= \common\widgets\DbText::widget(['key' => 'index-container5'])?>
            <?= \common\widgets\DbText::widget(['key' => 'index-container6'])?>
            <?= \common\widgets\DbText::widget(['key' => 'index-container7'])?>
        </div></div>
</div>
<?php $this->beginBlock('video_box')?>
    <div class="boxshade">
        <div class="videomod1">
            <div class="videomod3">
                <div class="videomod4">
                    <div class="videoclosebtn" onclick="closevideoplay();">×</div>
                    <video id="media" width="100%" height="100%" controls="controls">

                        <source src="/video/aboutproduct.mp4" type="video/mp4">

                    </video>

                </div>
            </div>
        </div>
    </div>
<?php $this->endBlock();?>
